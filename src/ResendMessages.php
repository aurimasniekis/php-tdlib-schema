<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Resends messages which failed to send. Can be called only for messages for which messageSendingStateFailed.can_retry is true and after specified in messageSendingStateFailed.retry_after time passed. If a message is re-sent, the corresponding failed to send message is deleted. Returns the sent messages in the same order as the message identifiers passed in message_ids. If a message can't be re-sent, null will be returned instead of the message.
 */
class ResendMessages extends TdFunction
{
    public const TYPE_NAME = 'resendMessages';

    /**
     * Identifier of the chat to send messages.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifiers of the messages to resend. Message identifiers must be in a strictly increasing order.
     *
     * @var int[]
     */
    protected array $messageIds;

    public function __construct(int $chatId, array $messageIds)
    {
        $this->chatId     = $chatId;
        $this->messageIds = $messageIds;
    }

    public static function fromArray(array $array): ResendMessages
    {
        return new static(
            $array['chat_id'],
            $array['message_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'message_ids' => $this->messageIds,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }
}
