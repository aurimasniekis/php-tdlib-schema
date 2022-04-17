<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Toggles whether a group call participant hand is rased
 */
class ToggleGroupCallParticipantIsHandRaised extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallParticipantIsHandRaised';

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
     * Pass true if the user's hand needs to be raised. Only self hand can be raised. Requires groupCall.can_be_managed group call flag to lower other's hand
     *
     * @var bool
     */
    protected bool $isHandRaised;

    public function __construct(int $groupCallId, MessageSender $participantId, bool $isHandRaised)
    {
        $this->groupCallId = $groupCallId;
        $this->participantId = $participantId;
        $this->isHandRaised = $isHandRaised;
    }

    public static function fromArray(array $array): ToggleGroupCallParticipantIsHandRaised
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['is_hand_raised'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'participant_id' => $this->participantId->typeSerialize(),
            'is_hand_raised' => $this->isHandRaised,
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

    public function getIsHandRaised(): bool
    {
        return $this->isHandRaised;
    }
}
