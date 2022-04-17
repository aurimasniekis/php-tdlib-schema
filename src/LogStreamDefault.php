<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The log is written to stderr or an OS specific log
 */
class LogStreamDefault extends LogStream
{
    public const TYPE_NAME = 'logStreamDefault';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): LogStreamDefault
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
