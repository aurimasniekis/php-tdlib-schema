<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Currently establishing a connection with a proxy server
 */
class ConnectionStateConnectingToProxy extends ConnectionState
{
    public const TYPE_NAME = 'connectionStateConnectingToProxy';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ConnectionStateConnectingToProxy
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
