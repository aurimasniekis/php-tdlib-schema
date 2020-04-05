<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Currently establishing a connection to the Telegram servers.
 */
class ConnectionStateConnecting extends ConnectionState
{
    public const TYPE_NAME = 'connectionStateConnecting';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ConnectionStateConnecting
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
