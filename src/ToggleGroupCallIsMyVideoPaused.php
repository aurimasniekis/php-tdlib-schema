<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Toggles whether current user's video is paused
 */
class ToggleGroupCallIsMyVideoPaused extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallIsMyVideoPaused';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * Pass true if the current user's video is paused
     *
     * @var bool
     */
    protected bool $isMyVideoPaused;

    public function __construct(int $groupCallId, bool $isMyVideoPaused)
    {
        $this->groupCallId = $groupCallId;
        $this->isMyVideoPaused = $isMyVideoPaused;
    }

    public static function fromArray(array $array): ToggleGroupCallIsMyVideoPaused
    {
        return new static(
            $array['group_call_id'],
            $array['is_my_video_paused'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'is_my_video_paused' => $this->isMyVideoPaused,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getIsMyVideoPaused(): bool
    {
        return $this->isMyVideoPaused;
    }
}
