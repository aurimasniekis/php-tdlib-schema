<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes volume level of a participant of an active group call. If the current user can manage the group call, then the participant's volume level will be changed for all users with the default volume level
 */
class SetGroupCallParticipantVolumeLevel extends TdFunction
{
    public const TYPE_NAME = 'setGroupCallParticipantVolumeLevel';

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
     * New participant's volume level; 1-20000 in hundreds of percents
     *
     * @var int
     */
    protected int $volumeLevel;

    public function __construct(int $groupCallId, MessageSender $participantId, int $volumeLevel)
    {
        $this->groupCallId = $groupCallId;
        $this->participantId = $participantId;
        $this->volumeLevel = $volumeLevel;
    }

    public static function fromArray(array $array): SetGroupCallParticipantVolumeLevel
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['volume_level'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'participant_id' => $this->participantId->typeSerialize(),
            'volume_level' => $this->volumeLevel,
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

    public function getVolumeLevel(): int
    {
        return $this->volumeLevel;
    }
}
