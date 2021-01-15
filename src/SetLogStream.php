<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets new log stream for internal logging of TDLib. This is an offline method. Can be called before authorization. Can be called synchronously.
 */
class SetLogStream extends TdFunction
{
    public const TYPE_NAME = 'setLogStream';

    /**
     * New log stream.
     *
     * @var LogStream
     */
    protected LogStream $logStream;

    public function __construct(LogStream $logStream)
    {
        $this->logStream = $logStream;
    }

    public static function fromArray(array $array): SetLogStream
    {
        return new static(
            TdSchemaRegistry::fromArray($array['log_stream']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'log_stream' => $this->logStream->typeSerialize(),
        ];
    }

    public function getLogStream(): LogStream
    {
        return $this->logStream;
    }
}
