<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the notification settings for chats of a given type
 */
class GetScopeNotificationSettings extends TdFunction
{
    public const TYPE_NAME = 'getScopeNotificationSettings';

    /**
     * Types of chats for which to return the notification settings information
     *
     * @var NotificationSettingsScope
     */
    protected NotificationSettingsScope $scope;

    public function __construct(NotificationSettingsScope $scope)
    {
        $this->scope = $scope;
    }

    public static function fromArray(array $array): GetScopeNotificationSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'scope' => $this->scope->typeSerialize(),
        ];
    }

    public function getScope(): NotificationSettingsScope
    {
        return $this->scope;
    }
}
