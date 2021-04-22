<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A list of chats usually located at the top of the main chat list. Unmuted chats are automatically moved from the Archive to the Main chat list when a new message arrives.
 */
class ChatListArchive extends ChatList
{
    public const TYPE_NAME = 'chatListArchive';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatListArchive
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
