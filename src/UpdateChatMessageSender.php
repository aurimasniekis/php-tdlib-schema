<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message sender that is selected to send messages in a chat has changed
 */
class UpdateChatMessageSender extends Update
{
    public const TYPE_NAME = 'updateChatMessageSender';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New value of message_sender_id; may be null if the user can't change message sender
     *
     * @var MessageSender|null
     */
    protected ?MessageSender $messageSenderId;

    public function __construct(int $chatId, ?MessageSender $messageSenderId)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageSenderId = $messageSenderId;
    }

    public static function fromArray(array $array): UpdateChatMessageSender
    {
        return new static(
            $array['chat_id'],
            (isset($array['message_sender_id']) ? TdSchemaRegistry::fromArray($array['message_sender_id']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_sender_id' => (isset($this->messageSenderId) ? $this->messageSenderId : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageSenderId(): ?MessageSender
    {
        return $this->messageSenderId;
    }
}
