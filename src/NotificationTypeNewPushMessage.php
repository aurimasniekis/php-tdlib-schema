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
     * The message identifier. The message will not be available in the chat history, but the ID can be used in viewMessages and as reply_to_message_id.
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Sender of the message; 0 if unknown. Corresponding user may be inaccessible.
     *
     * @var int
     */
    protected int $senderUserId;

    /**
     * Name of the sender; can be different from the name of the sender user.
     *
     * @var string
     */
    protected string $senderName;

    /**
     * True, if the message is outgoing.
     *
     * @var bool
     */
    protected bool $isOutgoing;

    /**
     * Push message content.
     *
     * @var PushMessageContent
     */
    protected PushMessageContent $content;

    public function __construct(int $messageId, int $senderUserId, string $senderName, bool $isOutgoing, PushMessageContent $content)
    {
        parent::__construct();

        $this->messageId    = $messageId;
        $this->senderUserId = $senderUserId;
        $this->senderName   = $senderName;
        $this->isOutgoing   = $isOutgoing;
        $this->content      = $content;
    }

    public static function fromArray(array $array): NotificationTypeNewPushMessage
    {
        return new static(
            $array['message_id'],
            $array['sender_user_id'],
            $array['sender_name'],
            $array['is_outgoing'],
            TdSchemaRegistry::fromArray($array['content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'message_id'     => $this->messageId,
            'sender_user_id' => $this->senderUserId,
            'sender_name'    => $this->senderName,
            'is_outgoing'    => $this->isOutgoing,
            'content'        => $this->content->typeSerialize(),
        ];
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
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
