<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a message that is replied by a given message. Also returns the pinned message, the game message, and the invoice message for messages of the types messagePinMessage, messageGameScore, and messagePaymentSuccessful respectively.
 */
class GetRepliedMessage extends TdFunction
{
    public const TYPE_NAME = 'getRepliedMessage';

    /**
     * Identifier of the chat the message belongs to.
     */
    protected int $chatId;

    /**
     * Identifier of the message reply to which to get.
     */
    protected int $messageId;

    public function __construct(int $chatId, int $messageId)
    {
        $this->chatId    = $chatId;
        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): GetRepliedMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
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
}
