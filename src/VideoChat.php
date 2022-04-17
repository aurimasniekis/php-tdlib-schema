<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a video chat
 */
class VideoChat extends TdObject
{
    public const TYPE_NAME = 'videoChat';

    /**
     * Group call identifier of an active video chat; 0 if none. Full information about the video chat can be received through the method getGroupCall
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * True, if the video chat has participants
     *
     * @var bool
     */
    protected bool $hasParticipants;

    /**
     * Default group call participant identifier to join the video chat; may be null
     *
     * @var MessageSender|null
     */
    protected ?MessageSender $defaultParticipantId;

    public function __construct(int $groupCallId, bool $hasParticipants, ?MessageSender $defaultParticipantId)
    {
        $this->groupCallId = $groupCallId;
        $this->hasParticipants = $hasParticipants;
        $this->defaultParticipantId = $defaultParticipantId;
    }

    public static function fromArray(array $array): VideoChat
    {
        return new static(
            $array['group_call_id'],
            $array['has_participants'],
            (isset($array['default_participant_id']) ? TdSchemaRegistry::fromArray($array['default_participant_id']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'has_participants' => $this->hasParticipants,
            'default_participant_id' => (isset($this->defaultParticipantId) ? $this->defaultParticipantId : null),
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getHasParticipants(): bool
    {
        return $this->hasParticipants;
    }

    public function getDefaultParticipantId(): ?MessageSender
    {
        return $this->defaultParticipantId;
    }
}
