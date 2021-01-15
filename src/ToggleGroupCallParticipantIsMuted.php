<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Toggles whether a group call participant is muted, unmuted, or allowed to unmute themself.
 */
class ToggleGroupCallParticipantIsMuted extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallParticipantIsMuted';

    /**
     * Group call identifier.
     */
    protected int $groupCallId;

    /**
     * User identifier.
     */
    protected int $userId;

    /**
     * Pass true if the user must be muted and false otherwise.
     */
    protected bool $isMuted;

    public function __construct(int $groupCallId, int $userId, bool $isMuted)
    {
        $this->groupCallId = $groupCallId;
        $this->userId      = $userId;
        $this->isMuted     = $isMuted;
    }

    public static function fromArray(array $array): ToggleGroupCallParticipantIsMuted
    {
        return new static(
            $array['group_call_id'],
            $array['user_id'],
            $array['is_muted'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'user_id'       => $this->userId,
            'is_muted'      => $this->isMuted,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }
}
