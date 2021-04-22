<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * New message was received
 */
class NotificationTypeNewMessage extends NotificationType
{
    public const TYPE_NAME = 'notificationTypeNewMessage';

    /**
     * The message
     *
     * @var Message
     */
    protected Message $message;

    public function __construct(Message $message)
    {
        parent::__construct();

        $this->message = $message;
    }

    public static function fromArray(array $array): NotificationTypeNewMessage
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message' => $this->message->typeSerialize(),
        ];
    }

    public function getMessage(): Message
    {
        return $this->message;
    }
}
