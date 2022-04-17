<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Number of unread chats, i.e. with unread messages or marked as unread, has changed. This update is sent only if the message database is used
 */
class UpdateUnreadChatCount extends Update
{
    public const TYPE_NAME = 'updateUnreadChatCount';

    /**
     * The chat list with changed number of unread messages
     *
     * @var ChatList
     */
    protected ChatList $chatList;

    /**
     * Approximate total number of chats in the chat list
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * Total number of unread chats
     *
     * @var int
     */
    protected int $unreadCount;

    /**
     * Total number of unread unmuted chats
     *
     * @var int
     */
    protected int $unreadUnmutedCount;

    /**
     * Total number of chats marked as unread
     *
     * @var int
     */
    protected int $markedAsUnreadCount;

    /**
     * Total number of unmuted chats marked as unread
     *
     * @var int
     */
    protected int $markedAsUnreadUnmutedCount;

    public function __construct(
        ChatList $chatList,
        int $totalCount,
        int $unreadCount,
        int $unreadUnmutedCount,
        int $markedAsUnreadCount,
        int $markedAsUnreadUnmutedCount
    ) {
        parent::__construct();

        $this->chatList = $chatList;
        $this->totalCount = $totalCount;
        $this->unreadCount = $unreadCount;
        $this->unreadUnmutedCount = $unreadUnmutedCount;
        $this->markedAsUnreadCount = $markedAsUnreadCount;
        $this->markedAsUnreadUnmutedCount = $markedAsUnreadUnmutedCount;
    }

    public static function fromArray(array $array): UpdateUnreadChatCount
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['total_count'],
            $array['unread_count'],
            $array['unread_unmuted_count'],
            $array['marked_as_unread_count'],
            $array['marked_as_unread_unmuted_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_list' => $this->chatList->typeSerialize(),
            'total_count' => $this->totalCount,
            'unread_count' => $this->unreadCount,
            'unread_unmuted_count' => $this->unreadUnmutedCount,
            'marked_as_unread_count' => $this->markedAsUnreadCount,
            'marked_as_unread_unmuted_count' => $this->markedAsUnreadUnmutedCount,
        ];
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    public function getUnreadUnmutedCount(): int
    {
        return $this->unreadUnmutedCount;
    }

    public function getMarkedAsUnreadCount(): int
    {
        return $this->markedAsUnreadCount;
    }

    public function getMarkedAsUnreadUnmutedCount(): int
    {
        return $this->markedAsUnreadUnmutedCount;
    }
}
