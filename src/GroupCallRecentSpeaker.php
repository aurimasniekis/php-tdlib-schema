<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a recently speaking participant in a group call
 */
class GroupCallRecentSpeaker extends TdObject
{
    public const TYPE_NAME = 'groupCallRecentSpeaker';

    /**
     * Group call participant identifier
     *
     * @var MessageSender
     */
    protected MessageSender $participantId;

    /**
     * True, is the user has spoken recently
     *
     * @var bool
     */
    protected bool $isSpeaking;

    public function __construct(MessageSender $participantId, bool $isSpeaking)
    {
        $this->participantId = $participantId;
        $this->isSpeaking = $isSpeaking;
    }

    public static function fromArray(array $array): GroupCallRecentSpeaker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['is_speaking'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'participant_id' => $this->participantId->typeSerialize(),
            'is_speaking' => $this->isSpeaking,
        ];
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }
}
