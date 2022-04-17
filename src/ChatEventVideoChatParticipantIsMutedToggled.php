<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A video chat participant was muted or unmuted
 */
class ChatEventVideoChatParticipantIsMutedToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventVideoChatParticipantIsMutedToggled';

    /**
     * Identifier of the affected group call participant
     *
     * @var MessageSender
     */
    protected MessageSender $participantId;

    /**
     * New value of is_muted
     *
     * @var bool
     */
    protected bool $isMuted;

    public function __construct(MessageSender $participantId, bool $isMuted)
    {
        parent::__construct();

        $this->participantId = $participantId;
        $this->isMuted = $isMuted;
    }

    public static function fromArray(array $array): ChatEventVideoChatParticipantIsMutedToggled
    {
        return new static(
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['is_muted'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'participant_id' => $this->participantId->typeSerialize(),
            'is_muted' => $this->isMuted,
        ];
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
