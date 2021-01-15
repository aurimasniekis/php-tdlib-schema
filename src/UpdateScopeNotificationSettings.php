<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Notification settings for some type of chats were updated.
 */
class UpdateScopeNotificationSettings extends Update
{
    public const TYPE_NAME = 'updateScopeNotificationSettings';

    /**
     * Types of chats for which notification settings were updated.
     *
     * @var NotificationSettingsScope
     */
    protected NotificationSettingsScope $scope;

    /**
     * The new notification settings.
     *
     * @var ScopeNotificationSettings
     */
    protected ScopeNotificationSettings $notificationSettings;

    public function __construct(NotificationSettingsScope $scope, ScopeNotificationSettings $notificationSettings)
    {
        parent::__construct();

        $this->scope                = $scope;
        $this->notificationSettings = $notificationSettings;
    }

    public static function fromArray(array $array): UpdateScopeNotificationSettings
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
