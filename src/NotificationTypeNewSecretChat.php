<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * New secret chat was created
 */
class NotificationTypeNewSecretChat extends NotificationType
{
    public const TYPE_NAME = 'notificationTypeNewSecretChat';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationTypeNewSecretChat
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
