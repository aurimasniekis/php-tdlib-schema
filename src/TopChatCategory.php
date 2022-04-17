<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents the categories of chats for which a list of frequently used chats can be retrieved
 */
class TopChatCategory extends TdObject
{
    public const TYPE_NAME = 'TopChatCategory';

    public function __construct()
    {
    }

    public static function fromArray(array $array): TopChatCategory
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
