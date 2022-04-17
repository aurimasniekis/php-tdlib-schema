<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * New message was received through a push notification
 */
class NotificationTypeNewPushMessage extends NotificationType
{
    public const TYPE_NAME = 'notificationTypeNewPushMessage';

    /**
     * The message identifier. The message will not be available in the chat history, but the ID can be used in viewMessages, or as reply_to_message_id
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Identifier of the sender of the message. Corresponding user or chat may be inaccessible
     *
     * @var MessageSender
     */
    protected MessageSender $senderId;

    /**
     * Name of the sender
     *
     * @var string
     */
    protected string $senderName;

    /**
     * True, if the message is outgoing
     *
     * @var bool
     */
    protected bool $isOutgoing;

    /**
     * Push message content
     *
     * @var PushMessageContent
     */
    protected PushMessageContent $content;

    public function __construct(
        int $messageId,
        MessageSender $senderId,
        string $senderName,
        bool $isOutgoing,
        PushMessageContent $content
    ) {
        parent::__construct();

        $this->messageId = $messageId;
        $this->senderId = $senderId;
        $this->senderName = $senderName;
        $this->isOutgoing = $isOutgoing;
        $this->content = $content;
    }

    public static function fromArray(array $array): NotificationTypeNewPushMessage
    {
        return new static(
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['sender_name'],
            $array['is_outgoing'],
            TdSchemaRegistry::fromArray($array['content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_id' => $this->messageId,
            'sender_id' => $this->senderId->typeSerialize(),
            'sender_name' => $this->senderName,
            'is_outgoing' => $this->isOutgoing,
            'content' => $this->content->typeSerialize(),
        ];
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    public function getContent(): PushMessageContent
    {
        return $this->content;
    }
}
