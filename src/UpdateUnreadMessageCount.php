<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Number of unread messages in a chat list has changed. This update is sent only if the message database is used.
 */
class UpdateUnreadMessageCount extends Update
{
    public const TYPE_NAME = 'updateUnreadMessageCount';

    /**
     * The chat list with changed number of unread messages.
     */
    protected ChatList $chatList;

    /**
     * Total number of unread messages.
     */
    protected int $unreadCount;

    /**
     * Total number of unread messages in unmuted chats.
     */
    protected int $unreadUnmutedCount;

    public function __construct(ChatList $chatList, int $unreadCount, int $unreadUnmutedCount)
    {
        parent::__construct();

        $this->chatList           = $chatList;
        $this->unreadCount        = $unreadCount;
        $this->unreadUnmutedCount = $unreadUnmutedCount;
    }

    public static function fromArray(array $array): UpdateUnreadMessageCount
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['unread_count'],
            $array['unread_unmuted_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_list'            => $this->chatList->typeSerialize(),
            'unread_count'         => $this->unreadCount,
            'unread_unmuted_count' => $this->unreadUnmutedCount,
        ];
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    public function getUnreadUnmutedCount(): int
    {
        return $this->unreadUnmutedCount;
    }
}
