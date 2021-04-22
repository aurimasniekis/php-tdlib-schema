<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A group containing notifications of type notificationTypeNewMessage and notificationTypeNewPushMessage with ordinary unread messages.
 */
class NotificationGroupTypeMessages extends NotificationGroupType
{
    public const TYPE_NAME = 'notificationGroupTypeMessages';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationGroupTypeMessages
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
