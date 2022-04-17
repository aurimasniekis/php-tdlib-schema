<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Removes potentially dangerous characters from the name of a file. The encoding of the file name is supposed to be UTF-8. Returns an empty string on failure. Can be called synchronously
 */
class CleanFileName extends TdFunction
{
    public const TYPE_NAME = 'cleanFileName';

    /**
     * File name or path to the file
     *
     * @var string
     */
    protected string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public static function fromArray(array $array): CleanFileName
    {
        return new static(
            $array['file_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_name' => $this->fileName,
        ];
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }
}
