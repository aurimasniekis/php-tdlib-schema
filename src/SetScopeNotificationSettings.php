<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes notification settings for chats of a given type.
 */
class SetScopeNotificationSettings extends TdFunction
{
    public const TYPE_NAME = 'setScopeNotificationSettings';

    /**
     * Types of chats for which to change the notification settings.
     */
    protected NotificationSettingsScope $scope;

    /**
     * The new notification settings for the given scope.
     */
    protected ScopeNotificationSettings $notificationSettings;

    public function __construct(NotificationSettingsScope $scope, ScopeNotificationSettings $notificationSettings)
    {
        $this->scope                = $scope;
        $this->notificationSettings = $notificationSettings;
    }

    public static function fromArray(array $array): SetScopeNotificationSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
            TdSchemaRegistry::fromArray($array['notification_settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'scope'                 => $this->scope->typeSerialize(),
            'notification_settings' => $this->notificationSettings->typeSerialize(),
        ];
    }

    public function getScope(): NotificationSettingsScope
    {
        return $this->scope;
    }

    public function getNotificationSettings(): ScopeNotificationSettings
    {
        return $this->notificationSettings;
    }
}
