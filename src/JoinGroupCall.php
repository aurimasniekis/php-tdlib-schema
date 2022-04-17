<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Joins an active group call. Returns join response payload for tgcalls
 */
class JoinGroupCall extends TdFunction
{
    public const TYPE_NAME = 'joinGroupCall';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * Identifier of a group call participant, which will be used to join the call; pass null to join as self; video chats only
     *
     * @var MessageSender
     */
    protected MessageSender $participantId;

    /**
     * Caller audio channel synchronization source identifier; received from tgcalls
     *
     * @var int
     */
    protected int $audioSourceId;

    /**
     * Group call join payload; received from tgcalls
     *
     * @var string
     */
    protected string $payload;

    /**
     * True, if the user's microphone is muted
     *
     * @var bool
     */
    protected bool $isMuted;

    /**
     * True, if the user's video is enabled
     *
     * @var bool
     */
    protected bool $isMyVideoEnabled;

    /**
     * If non-empty, invite hash to be used to join the group call without being muted by administrators
     *
     * @var string
     */
    protected string $inviteHash;

    public function __construct(
        int $groupCallId,
        MessageSender $participantId,
        int $audioSourceId,
        string $payload,
        bool $isMuted,
        bool $isMyVideoEnabled,
        string $inviteHash
    ) {
        $this->groupCallId = $groupCallId;
        $this->participantId = $participantId;
        $this->audioSourceId = $audioSourceId;
        $this->payload = $payload;
        $this->isMuted = $isMuted;
        $this->isMyVideoEnabled = $isMyVideoEnabled;
        $this->inviteHash = $inviteHash;
    }

    public static function fromArray(array $array): JoinGroupCall
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['audio_source_id'],
            $array['payload'],
            $array['is_muted'],
            $array['is_my_video_enabled'],
            $array['invite_hash'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'participant_id' => $this->participantId->typeSerialize(),
            'audio_source_id' => $this->audioSourceId,
            'payload' => $this->payload,
            'is_muted' => $this->isMuted,
            'is_my_video_enabled' => $this->isMyVideoEnabled,
            'invite_hash' => $this->inviteHash,
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

    public function getAudioSourceId(): int
    {
        return $this->audioSourceId;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    public function getIsMyVideoEnabled(): bool
    {
        return $this->isMyVideoEnabled;
    }

    public function getInviteHash(): string
    {
        return $this->inviteHash;
    }
}
