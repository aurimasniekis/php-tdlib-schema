<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Toggles whether the current user will receive a notification when the group call will start; scheduled group calls only
 */
class ToggleGroupCallEnabledStartNotification extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallEnabledStartNotification';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * New value of the enabled_start_notification setting
     *
     * @var bool
     */
    protected bool $enabledStartNotification;

    public function __construct(int $groupCallId, bool $enabledStartNotification)
    {
        $this->groupCallId = $groupCallId;
        $this->enabledStartNotification = $enabledStartNotification;
    }

    public static function fromArray(array $array): ToggleGroupCallEnabledStartNotification
    {
        return new static(
            $array['group_call_id'],
            $array['enabled_start_notification'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'enabled_start_notification' => $this->enabledStartNotification,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getEnabledStartNotification(): bool
    {
        return $this->enabledStartNotification;
    }
}
