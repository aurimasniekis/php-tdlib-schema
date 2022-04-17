<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with an unread mention was read
 */
class UpdateMessageMentionRead extends Update
{
    public const TYPE_NAME = 'updateMessageMentionRead';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * The new number of unread mention messages left in the chat
     *
     * @var int
     */
    protected int $unreadMentionCount;

    public function __construct(int $chatId, int $messageId, int $unreadMentionCount)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->unreadMentionCount = $unreadMentionCount;
    }

    public static function fromArray(array $array): UpdateMessageMentionRead
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['unread_mention_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'unread_mention_count' => $this->unreadMentionCount,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getUnreadMentionCount(): int
    {
        return $this->unreadMentionCount;
    }
}
