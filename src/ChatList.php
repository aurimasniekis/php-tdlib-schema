<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a list of chats
 */
class ChatList extends TdObject
{
    public const TYPE_NAME = 'ChatList';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ChatList
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
