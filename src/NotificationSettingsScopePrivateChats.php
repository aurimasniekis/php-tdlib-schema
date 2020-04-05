<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Notification settings applied to all private and secret chats when the corresponding chat setting has a default value.
 */
class NotificationSettingsScopePrivateChats extends NotificationSettingsScope
{
    public const TYPE_NAME = 'notificationSettingsScopePrivateChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationSettingsScopePrivateChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
