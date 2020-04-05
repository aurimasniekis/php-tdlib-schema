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
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the user who will be shown as the sender of the message; may be 0 for channel posts.
     *
     * @var int
     */
    protected int $senderUserId;

    /**
     * Identifier of the message to reply to or 0.
     *
     * @var int
     */
    protected int $replyToMessageId;

    /**
     * Pass true to disable notification for the message.
     *
     * @var bool
     */
    protected bool $disableNotification;

    /**
     * The content of the message to be added.
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        int $chatId,
        int $senderUserId,
        int $replyToMessageId,
        bool $disableNotification,
        InputMessageContent $inputMessageContent
    ) {
        $this->chatId              = $chatId;
        $this->senderUserId        = $senderUserId;
        $this->replyToMessageId    = $replyToMessageId;
        $this->disableNotification = $disableNotification;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): AddLocalMessage
    {
        return new static(
            $array['chat_id'],
            $array['sender_user_id'],
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
            'sender_user_id'        => $this->senderUserId,
            'reply_to_message_id'   => $this->replyToMessageId,
            'disable_notification'  => $this->disableNotification,
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
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
