<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A main list of chats.
 */
class ChatListMain extends ChatList
{
    public const TYPE_NAME = 'chatListMain';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatListMain
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
