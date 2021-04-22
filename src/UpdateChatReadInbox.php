<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Incoming messages were read or number of unread messages has been changed
 */
class UpdateChatReadInbox extends Update
{
    public const TYPE_NAME = 'updateChatReadInbox';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the last read incoming message
     *
     * @var int
     */
    protected int $lastReadInboxMessageId;

    /**
     * The number of unread messages left in the chat
     *
     * @var int
     */
    protected int $unreadCount;

    public function __construct(int $chatId, int $lastReadInboxMessageId, int $unreadCount)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->lastReadInboxMessageId = $lastReadInboxMessageId;
        $this->unreadCount = $unreadCount;
    }

    public static function fromArray(array $array): UpdateChatReadInbox
    {
        return new static(
            $array['chat_id'],
            $array['last_read_inbox_message_id'],
            $array['unread_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'last_read_inbox_message_id' => $this->lastReadInboxMessageId,
            'unread_count' => $this->unreadCount,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLastReadInboxMessageId(): int
    {
        return $this->lastReadInboxMessageId;
    }

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }
}
