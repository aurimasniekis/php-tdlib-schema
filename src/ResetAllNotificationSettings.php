<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Resets all notification settings to their default values. By default, all chats are unmuted, the sound is set to "default" and message previews are shown.
 */
class ResetAllNotificationSettings extends TdFunction
{
    public const TYPE_NAME = 'resetAllNotificationSettings';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResetAllNotificationSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
