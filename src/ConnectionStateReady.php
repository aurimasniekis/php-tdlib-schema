<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * There is a working connection to the Telegram servers
 */
class ConnectionStateReady extends ConnectionState
{
    public const TYPE_NAME = 'connectionStateReady';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ConnectionStateReady
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
