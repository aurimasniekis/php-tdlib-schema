<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * New message was received through a push notification.
 */
class NotificationTypeNewPushMessage extends NotificationType
{
    public const TYPE_NAME = 'notificationTypeNewPushMessage';

    /**
     * The message identifier. The message will not be available in the chat history, but the ID can be used in viewMessages, or as reply_to_message_id.
     */
    protected int $messageId;

    /**
     * The sender of the message. Corresponding user or chat may be inaccessible.
     */
    protected MessageSender $sender;

    /**
     * Name of the sender.
     */
    protected string $senderName;

    /**
     * True, if the message is outgoing.
     */
    protected bool $isOutgoing;

    /**
     * Push message content.
     */
    protected PushMessageContent $content;

    public function __construct(int $messageId, MessageSender $sender, string $senderName, bool $isOutgoing, PushMessageContent $content)
    {
        parent::__construct();

        $this->messageId  = $messageId;
        $this->sender     = $sender;
        $this->senderName = $senderName;
        $this->isOutgoing = $isOutgoing;
        $this->content    = $content;
    }

    public static function fromArray(array $array): NotificationTypeNewPushMessage
    {
        return new static(
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['sender']),
            $array['sender_name'],
            $array['is_outgoing'],
            TdSchemaRegistry::fromArray($array['content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'message_id'  => $this->messageId,
            'sender'      => $this->sender->typeSerialize(),
            'sender_name' => $this->senderName,
            'is_outgoing' => $this->isOutgoing,
            'content'     => $this->content->typeSerialize(),
        ];
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSender(): MessageSender
    {
        return $this->sender;
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
