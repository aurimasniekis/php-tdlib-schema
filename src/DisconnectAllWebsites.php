<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Disconnects all websites from the current user's Telegram account.
 */
class DisconnectAllWebsites extends TdFunction
{
    public const TYPE_NAME = 'disconnectAllWebsites';

    public function __construct()
    {
    }

    public static function fromArray(array $array): DisconnectAllWebsites
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
