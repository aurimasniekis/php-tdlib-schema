<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Adds a local message to a chat. The message is persistent across application restarts only if the message database is used. Returns the added message.
 */
class AddLocalMessage extends TdFunction
{
    public const TYPE_NAME = 'addLocalMessage';

    /**
     * Target chat.
     */
    protected int $chatId;

    /**
     * The sender sender of the message.
     */
    protected MessageSender $sender;

    /**
     * Identifier of the message to reply to or 0.
     */
    protected int $replyToMessageId;

    /**
     * Pass true to disable notification for the message.
     */
    protected bool $disableNotification;

    /**
     * The content of the message to be added.
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        int $chatId,
        MessageSender $sender,
        int $replyToMessageId,
        bool $disableNotification,
        InputMessageContent $inputMessageContent
    ) {
        $this->chatId              = $chatId;
        $this->sender              = $sender;
        $this->replyToMessageId    = $replyToMessageId;
        $this->disableNotification = $disableNotification;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): AddLocalMessage
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['sender']),
            $array['reply_to_message_id'],
            $array['disable_notification'],
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'sender'                => $this->sender->typeSerialize(),
            'reply_to_message_id'   => $this->replyToMessageId,
            'disable_notification'  => $this->disableNotification,
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSender(): MessageSender
    {
        return $this->sender;
    }

    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
