<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A group containing a notification of type notificationTypeNewSecretChat
 */
class NotificationGroupTypeSecretChat extends NotificationGroupType
{
    public const TYPE_NAME = 'notificationGroupTypeSecretChat';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationGroupTypeSecretChat
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
