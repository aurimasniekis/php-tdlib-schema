<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the current state of the connection to Telegram servers
 */
class ConnectionState extends TdObject
{
    public const TYPE_NAME = 'ConnectionState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ConnectionState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
