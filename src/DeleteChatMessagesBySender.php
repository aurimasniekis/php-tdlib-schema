<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes all messages sent by the specified message sender in a chat. Supported only for supergroups; requires can_delete_messages administrator privileges
 */
class DeleteChatMessagesBySender extends TdFunction
{
    public const TYPE_NAME = 'deleteChatMessagesBySender';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the sender of messages to delete
     *
     * @var MessageSender
     */
    protected MessageSender $senderId;

    public function __construct(int $chatId, MessageSender $senderId)
    {
        $this->chatId = $chatId;
        $this->senderId = $senderId;
    }

    public static function fromArray(array $array): DeleteChatMessagesBySender
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'sender_id' => $this->senderId->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }
}
