<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message pinned state was changed
 */
class UpdateMessageIsPinned extends Update
{
    public const TYPE_NAME = 'updateMessageIsPinned';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * True, if the message is pinned
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(int $chatId, int $messageId, bool $isPinned)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): UpdateMessageIsPinned
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'is_pinned' => $this->isPinned,
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

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
