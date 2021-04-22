<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the marked as unread state of a chat.
 */
class ToggleChatIsMarkedAsUnread extends TdFunction
{
    public const TYPE_NAME = 'toggleChatIsMarkedAsUnread';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * New value of is_marked_as_unread.
     */
    protected bool $isMarkedAsUnread;

    public function __construct(int $chatId, bool $isMarkedAsUnread)
    {
        $this->chatId           = $chatId;
        $this->isMarkedAsUnread = $isMarkedAsUnread;
    }

    public static function fromArray(array $array): ToggleChatIsMarkedAsUnread
    {
        return new static(
            $array['chat_id'],
            $array['is_marked_as_unread'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'is_marked_as_unread' => $this->isMarkedAsUnread,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }
}
