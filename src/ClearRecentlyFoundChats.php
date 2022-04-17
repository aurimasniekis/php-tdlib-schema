<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Clears the list of recently found chats
 */
class ClearRecentlyFoundChats extends TdFunction
{
    public const TYPE_NAME = 'clearRecentlyFoundChats';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ClearRecentlyFoundChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
