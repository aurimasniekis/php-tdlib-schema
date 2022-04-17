<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Toggles whether a participant of an active group call is muted, unmuted, or allowed to unmute themselves
 */
class ToggleGroupCallParticipantIsMuted extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallParticipantIsMuted';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * Participant identifier
     *
     * @var MessageSender
     */
    protected MessageSender $participantId;

    /**
     * Pass true if the user must be muted and false otherwise
     *
     * @var bool
     */
    protected bool $isMuted;

    public function __construct(int $groupCallId, MessageSender $participantId, bool $isMuted)
    {
        $this->groupCallId = $groupCallId;
        $this->participantId = $participantId;
        $this->isMuted = $isMuted;
    }

    public static function fromArray(array $array): ToggleGroupCallParticipantIsMuted
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['is_muted'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'participant_id' => $this->participantId->typeSerialize(),
            'is_muted' => $this->isMuted,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }
}
