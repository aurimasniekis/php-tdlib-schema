<?php

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema\Generator\Parser;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class SchemaParser
{
    public const MASTER_TL_API_SOURCE_URL = 'https://raw.githubusercontent.com/tdlib/td/v1.7.0/td/generate/scheme/td_api.tl';

    private LoggerInterface $logger;

    private string          $schemaFile;
    private string          $rawSchema;
    private string          $currentLine;
    private int             $currentLineNr;
    private array           $documentation;
    private array           $classes;

    public function __construct(LoggerInterface $logger = null, string $schemaFile = null)
    {
        $this->logger        = $logger ?? new NullLogger();
        $this->schemaFile    = $schemaFile ?? static::MASTER_TL_API_SOURCE_URL;
        $this->rawSchema     = file_get_contents($this->schemaFile);
        $this->documentation = [];
        $this->classes       = [];
    }

    /**
     * @return ClassDefinition[]
     */
    public function parse(): array
    {
        $lines = explode(PHP_EOL, $this->rawSchema);

        $description          = '';
        $currentClassName     = '';
        $currentClass         = new ClassDefinition();
        $isFunction           = false;
        $needClassDescription = false;
        $this->currentLineNr  = 0;

        foreach ($lines as $line) {
            $this->logger->debug('Current Line', ['line' => $line]);

            $this->currentLine = $line;
            $this->currentLineNr++;

            if ('---types---' === $line) {
                $isFunction = false;
            } elseif ('---functions---' === $line) {
                $isFunction           = true;
                $currentClassName     = '';
                $currentClass         = new ClassDefinition();
                $needClassDescription = false;
            } elseif (($line[0] ?? '') === '/') {
                if (($line[1] ?? '') !== '/') {
                    $this->printError('Wrong comment');

                    continue;
                }

                if (($line[2] ?? '') === '@' || ($line[2] ?? '') === '-') {
                    $description .= trim(substr($line, 2 + intval('-' === $line[2]))) . ' ';
                } else {
                    $this->printError('Unexpected comment');
                }
            } elseif (strpos($line, '? =') || strpos($line, ' = Vector t;') || 'boolFalse = Bool;' === $line ||
                'boolTrue = Bool;' === $line || 'bytes = Bytes;' === $line || 'int32 = Int32;' === $line ||
                'int53 = Int53;' === $line || 'int64 = Int64;' === $line) {
                $this->printDebug('skip built-in types');

                continue;
            } else {
                $description = trim($description);

                if ('' === $description) {
//                    $this->printError('Empty description', ['description' => $description]);
                }

                if (($description[0] ?? '') !== '@') {
//                    $this->printError('Wrong description begin', ['description' => $description]);
                }

                $docs = explode('@', $description);
                array_shift($docs);

                $info = [];
                foreach ($docs as $doc) {
                    [$key, $value] = explode(' ', $doc, 2);
                    $value         = trim($value);

                    if ($needClassDescription) {
                        if ('description' === $key) {
                            $needClassDescription = false;

                            $currentClass->classDocs   = $value;
                            $currentClass->parentClass = 'Object';
                            $currentClass->typeName    = $currentClass->className;

                            $this->classes[$value] = $currentClass;
                            $currentClass          = new ClassDefinition();
                            continue;
                        } else {
                            $this->printError('Expected abstract class description', ['description' => $description]);
                        }
                    }

                    if ('class' === $key) {
                        $currentClassName        = $this->getClassName($value);
                        $currentClass->className = $currentClassName;

                        $needClassDescription = true;

                        if ($isFunction) {
                            $this->printError('Unexpected class definition');
                        }
                    } else {
                        if (isset($info[$key])) {
//                            $this->printError("Duplicate info about `$key`");
                        }
                        $info[$key] = trim($value);
                    }
                }

                if (1 !== substr_count($line, '=')) {
//                    $this->printError("Wrong '=' count");
                    continue;
                }

                [$fields, $type] = explode('=', $line);
                $type            = $this->getClassName($type);
                $fields          = explode(' ', trim($fields));
                $typeName        = array_shift($fields);
                $className       = $this->getClassName($typeName);

                if ($type !== $currentClassName) {
                    $currentClassName     = '';
                    $currentClass         = new ClassDefinition();
                    $needClassDescription = false;
                }

                if (!$isFunction) {
                    $typeLower      = strtolower($type);
                    $classNameLower = strtolower($className);

                    if (empty($currentClassName) === ($typeLower !== $classNameLower)) {
                        $this->printError('Wrong constructor name');
                    }

                    if (0 !== strpos($classNameLower, $typeLower)) {
                        // $this->printError('Wrong constructor name');
                    }
                }

                $knownFields = [];
                foreach ($fields as $field) {
                    [$fieldName, $fieldType] = explode(':', $field);

                    if (isset($info['param_' . $fieldName])) {
                        $knownFields['param_' . $fieldName] = $fieldType;

                        continue;
                    }

                    if (isset($info[$fieldName])) {
                        $knownFields[$fieldName] = $fieldType;

                        continue;
                    }

                    $this->printError("Have no info about field `$fieldName`");
                }

                foreach ($info as $name => $value) {
                    if (!$value) {
                        $this->printError("info[$name] for $className is empty");
                    } elseif (($value[0] < 'A' || $value[0] > 'Z') && ($value[0] < '0' || $value[0] > '9')) {
                        $this->printError("info[$name] for $className doesn't begins with capital letter");
                    }
                }

                foreach (array_diff_key($info, $knownFields) as $fieldName => $fieldInfo) {
                    if ('description' !== $fieldName) {
                        $this->printError("Have info about unexisted field `$fieldName`");
                    }
                }

                if (!isset($info['description'])) {
                    $this->printError("Have no description for class `$className`");
                }

                $baseClassName    = $currentClassName ?: $this->getBaseClassName($isFunction);
                $classDescription = $info['description'];

                if ($isFunction) {
                    $currentClass->returnType = $this->getTypeName($type);
                }

                $currentClass->className   = $className;
                $currentClass->parentClass = $baseClassName;
                $currentClass->classDocs   = $classDescription;
                $currentClass->typeName    = $typeName;

                foreach ($knownFields as $name => $fieldType) {
                    $mayBeNull     = false !== stripos($info[$name], 'may be null');
                    $fieldName     = $this->getFieldName($name, $className);
                    $fieldTypeName = $this->getTypeName($fieldType);

                    $rawName = $name;
                    if ('param_' === substr($rawName, 0, 6)) {
                        $rawName = substr($rawName, 6);
                    }

                    $field            = $currentClass->getField($name);
                    $field->rawName   = $rawName;
                    $field->name      = $fieldName;
                    $field->type      = $fieldTypeName;
                    $field->doc       = $info[$name];
                    $field->mayBeNull = $mayBeNull;
                }

                $this->classes[$typeName] = $currentClass;
                $currentClass             = new ClassDefinition();
                $description              = '';
            }
        }

        return $this->classes;
    }

    private function printError(string $msg, array $args = []): void
    {
        $this->logger->error(
            $msg,
            array_merge(
                ['line' => $this->currentLine, 'line_nr' => $this->currentLineNr],
                $args
            )
        );
    }

    private function printDebug(string $msg, array $args = []): void
    {
        $this->logger->debug(
            $msg,
            array_merge(
                ['line' => $this->currentLine, 'line_nr' => $this->currentLineNr],
                $args
            )
        );
    }

    protected function getClassName($name): string
    {
        return implode(array_map('ucfirst', explode('.', trim($name, "\r\n ;"))));
    }

    protected function getBaseClassName($isFunction): string
    {
        return $isFunction ? 'Function' : 'Object';
    }

    protected function getTypeName($type): string
    {
        switch ($type) {
            case 'Bool':
                return 'bool';
            case 'int32':
            case 'int53':
                return 'int';
            case 'double':
                return 'float';
            case 'string':
            case 'bytes':
            case 'int64':
                return 'string';
            case 'bool':
            case 'int':
            case 'long':
            case 'Int':
            case 'Long':
            case 'Int32':
            case 'Int53':
            case 'Int64':
            case 'Double':
            case 'String':
            case 'Bytes':
                $this->printError("Wrong type $type");

                return '';
            default:
                if ('vector' === substr($type, 0, 6)) {
                    if ('<' !== $type[6] || '>' !== $type[strlen($type) - 1]) {
                        $this->printError("Wrong vector subtype in $type");

                        return '';
                    }

                    return $this->getTypeName(substr($type, 7, -1)) . '[]';
                }

                if (preg_match('/[^A-Za-z0-9.]/', $type)) {
                    $this->printError("Wrong type $type");

                    return '';
                }

                return $this->getClassName($type);
        }
    }

    protected function getFieldName($name, $className): string
    {
        if ('param_' === substr($name, 0, 6)) {
            $name = substr($name, 6);
        }

        return preg_replace_callback(
            '/_([A-Za-z])/',
            fn ($matches) => strtoupper($matches[1]),
            trim($name)
        );
    }
}
