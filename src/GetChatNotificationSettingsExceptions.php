<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns list of chats with non-default notification settings
 */
class GetChatNotificationSettingsExceptions extends TdFunction
{
    public const TYPE_NAME = 'getChatNotificationSettingsExceptions';

    /**
     * If specified, only chats from the specified scope will be returned
     *
     * @var NotificationSettingsScope
     */
    protected NotificationSettingsScope $scope;

    /**
     * If true, also chats with non-default sound will be returned
     *
     * @var bool
     */
    protected bool $compareSound;

    public function __construct(NotificationSettingsScope $scope, bool $compareSound)
    {
        $this->scope = $scope;
        $this->compareSound = $compareSound;
    }

    public static function fromArray(array $array): GetChatNotificationSettingsExceptions
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
            $array['compare_sound'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'scope' => $this->scope->typeSerialize(),
            'compare_sound' => $this->compareSound,
        ];
    }

    public function getScope(): NotificationSettingsScope
    {
        return $this->scope;
    }

    public function getCompareSound(): bool
    {
        return $this->compareSound;
    }
}
