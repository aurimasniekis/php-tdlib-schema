<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The log is written nowhere
 */
class LogStreamEmpty extends LogStream
{
    public const TYPE_NAME = 'logStreamEmpty';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): LogStreamEmpty
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
