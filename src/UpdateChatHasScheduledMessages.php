<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat's has_scheduled_messages field has changed
 */
class UpdateChatHasScheduledMessages extends Update
{
    public const TYPE_NAME = 'updateChatHasScheduledMessages';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New value of has_scheduled_messages
     *
     * @var bool
     */
    protected bool $hasScheduledMessages;

    public function __construct(int $chatId, bool $hasScheduledMessages)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->hasScheduledMessages = $hasScheduledMessages;
    }

    public static function fromArray(array $array): UpdateChatHasScheduledMessages
    {
        return new static(
            $array['chat_id'],
            $array['has_scheduled_messages'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'has_scheduled_messages' => $this->hasScheduledMessages,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getHasScheduledMessages(): bool
    {
        return $this->hasScheduledMessages;
    }
}
