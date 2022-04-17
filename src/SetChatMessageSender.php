<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Selects a message sender to send messages in a chat
 */
class SetChatMessageSender extends TdFunction
{
    public const TYPE_NAME = 'setChatMessageSender';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New message sender for the chat
     *
     * @var MessageSender
     */
    protected MessageSender $messageSenderId;

    public function __construct(int $chatId, MessageSender $messageSenderId)
    {
        $this->chatId = $chatId;
        $this->messageSenderId = $messageSenderId;
    }

    public static function fromArray(array $array): SetChatMessageSender
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['message_sender_id']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_sender_id' => $this->messageSenderId->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageSenderId(): MessageSender
    {
        return $this->messageSenderId;
    }
}
