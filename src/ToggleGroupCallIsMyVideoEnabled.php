<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Toggles whether current user's video is enabled
 */
class ToggleGroupCallIsMyVideoEnabled extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallIsMyVideoEnabled';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * Pass true if the current user's video is enabled
     *
     * @var bool
     */
    protected bool $isMyVideoEnabled;

    public function __construct(int $groupCallId, bool $isMyVideoEnabled)
    {
        $this->groupCallId = $groupCallId;
        $this->isMyVideoEnabled = $isMyVideoEnabled;
    }

    public static function fromArray(array $array): ToggleGroupCallIsMyVideoEnabled
    {
        return new static(
            $array['group_call_id'],
            $array['is_my_video_enabled'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'is_my_video_enabled' => $this->isMyVideoEnabled,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getIsMyVideoEnabled(): bool
    {
        return $this->isMyVideoEnabled;
    }
}
