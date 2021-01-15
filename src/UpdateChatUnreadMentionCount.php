<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat unread_mention_count has changed.
 */
class UpdateChatUnreadMentionCount extends Update
{
    public const TYPE_NAME = 'updateChatUnreadMentionCount';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The number of unread mention messages left in the chat.
     *
     * @var int
     */
    protected int $unreadMentionCount;

    public function __construct(int $chatId, int $unreadMentionCount)
    {
        parent::__construct();

        $this->chatId             = $chatId;
        $this->unreadMentionCount = $unreadMentionCount;
    }

    public static function fromArray(array $array): UpdateChatUnreadMentionCount
    {
        return new static(
            $array['chat_id'],
            $array['unread_mention_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'unread_mention_count' => $this->unreadMentionCount,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUnreadMentionCount(): int
    {
        return $this->unreadMentionCount;
    }
}
