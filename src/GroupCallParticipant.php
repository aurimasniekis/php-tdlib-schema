<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a group call participant
 */
class GroupCallParticipant extends TdObject
{
    public const TYPE_NAME = 'groupCallParticipant';

    /**
     * Identifier of the group call participant
     *
     * @var MessageSender
     */
    protected MessageSender $participantId;

    /**
     * User's audio channel synchronization source identifier
     *
     * @var int
     */
    protected int $audioSourceId;

    /**
     * User's screen sharing audio channel synchronization source identifier
     *
     * @var int
     */
    protected int $screenSharingAudioSourceId;

    /**
     * Information about user's video channel; may be null if there is no active video
     *
     * @var GroupCallParticipantVideoInfo|null
     */
    protected ?GroupCallParticipantVideoInfo $videoInfo;

    /**
     * Information about user's screen sharing video channel; may be null if there is no active screen sharing video
     *
     * @var GroupCallParticipantVideoInfo|null
     */
    protected ?GroupCallParticipantVideoInfo $screenSharingVideoInfo;

    /**
     * The participant user's bio or the participant chat's description
     *
     * @var string
     */
    protected string $bio;

    /**
     * True, if the participant is the current user
     *
     * @var bool
     */
    protected bool $isCurrentUser;

    /**
     * True, if the participant is speaking as set by setGroupCallParticipantIsSpeaking
     *
     * @var bool
     */
    protected bool $isSpeaking;

    /**
     * True, if the participant hand is raised
     *
     * @var bool
     */
    protected bool $isHandRaised;

    /**
     * True, if the current user can mute the participant for all other group call participants
     *
     * @var bool
     */
    protected bool $canBeMutedForAllUsers;

    /**
     * True, if the current user can allow the participant to unmute themselves or unmute the participant (if the participant is the current user)
     *
     * @var bool
     */
    protected bool $canBeUnmutedForAllUsers;

    /**
     * True, if the current user can mute the participant only for self
     *
     * @var bool
     */
    protected bool $canBeMutedForCurrentUser;

    /**
     * True, if the current user can unmute the participant for self
     *
     * @var bool
     */
    protected bool $canBeUnmutedForCurrentUser;

    /**
     * True, if the participant is muted for all users
     *
     * @var bool
     */
    protected bool $isMutedForAllUsers;

    /**
     * True, if the participant is muted for the current user
     *
     * @var bool
     */
    protected bool $isMutedForCurrentUser;

    /**
     * True, if the participant is muted for all users, but can unmute themselves
     *
     * @var bool
     */
    protected bool $canUnmuteSelf;

    /**
     * Participant's volume level; 1-20000 in hundreds of percents
     *
     * @var int
     */
    protected int $volumeLevel;

    /**
     * User's order in the group call participant list. Orders must be compared lexicographically. The bigger is order, the higher is user in the list. If order is empty, the user must be removed from the participant list
     *
     * @var string
     */
    protected string $order;

    public function __construct(
        MessageSender $participantId,
        int $audioSourceId,
        int $screenSharingAudioSourceId,
        ?GroupCallParticipantVideoInfo $videoInfo,
        ?GroupCallParticipantVideoInfo $screenSharingVideoInfo,
        string $bio,
        bool $isCurrentUser,
        bool $isSpeaking,
        bool $isHandRaised,
        bool $canBeMutedForAllUsers,
        bool $canBeUnmutedForAllUsers,
        bool $canBeMutedForCurrentUser,
        bool $canBeUnmutedForCurrentUser,
        bool $isMutedForAllUsers,
        bool $isMutedForCurrentUser,
        bool $canUnmuteSelf,
        int $volumeLevel,
        string $order
    ) {
        $this->participantId = $participantId;
        $this->audioSourceId = $audioSourceId;
        $this->screenSharingAudioSourceId = $screenSharingAudioSourceId;
        $this->videoInfo = $videoInfo;
        $this->screenSharingVideoInfo = $screenSharingVideoInfo;
        $this->bio = $bio;
        $this->isCurrentUser = $isCurrentUser;
        $this->isSpeaking = $isSpeaking;
        $this->isHandRaised = $isHandRaised;
        $this->canBeMutedForAllUsers = $canBeMutedForAllUsers;
        $this->canBeUnmutedForAllUsers = $canBeUnmutedForAllUsers;
        $this->canBeMutedForCurrentUser = $canBeMutedForCurrentUser;
        $this->canBeUnmutedForCurrentUser = $canBeUnmutedForCurrentUser;
        $this->isMutedForAllUsers = $isMutedForAllUsers;
        $this->isMutedForCurrentUser = $isMutedForCurrentUser;
        $this->canUnmuteSelf = $canUnmuteSelf;
        $this->volumeLevel = $volumeLevel;
        $this->order = $order;
    }

    public static function fromArray(array $array): GroupCallParticipant
    {
        return new static(
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['audio_source_id'],
            $array['screen_sharing_audio_source_id'],
            (isset($array['video_info']) ? TdSchemaRegistry::fromArray($array['video_info']) : null),
            (isset($array['screen_sharing_video_info']) ? TdSchemaRegistry::fromArray($array['screen_sharing_video_info']) : null),
            $array['bio'],
            $array['is_current_user'],
            $array['is_speaking'],
            $array['is_hand_raised'],
            $array['can_be_muted_for_all_users'],
            $array['can_be_unmuted_for_all_users'],
            $array['can_be_muted_for_current_user'],
            $array['can_be_unmuted_for_current_user'],
            $array['is_muted_for_all_users'],
            $array['is_muted_for_current_user'],
            $array['can_unmute_self'],
            $array['volume_level'],
            $array['order'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'participant_id' => $this->participantId->typeSerialize(),
            'audio_source_id' => $this->audioSourceId,
            'screen_sharing_audio_source_id' => $this->screenSharingAudioSourceId,
            'video_info' => (isset($this->videoInfo) ? $this->videoInfo : null),
            'screen_sharing_video_info' => (isset($this->screenSharingVideoInfo) ? $this->screenSharingVideoInfo : null),
            'bio' => $this->bio,
            'is_current_user' => $this->isCurrentUser,
            'is_speaking' => $this->isSpeaking,
            'is_hand_raised' => $this->isHandRaised,
            'can_be_muted_for_all_users' => $this->canBeMutedForAllUsers,
            'can_be_unmuted_for_all_users' => $this->canBeUnmutedForAllUsers,
            'can_be_muted_for_current_user' => $this->canBeMutedForCurrentUser,
            'can_be_unmuted_for_current_user' => $this->canBeUnmutedForCurrentUser,
            'is_muted_for_all_users' => $this->isMutedForAllUsers,
            'is_muted_for_current_user' => $this->isMutedForCurrentUser,
            'can_unmute_self' => $this->canUnmuteSelf,
            'volume_level' => $this->volumeLevel,
            'order' => $this->order,
        ];
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function getAudioSourceId(): int
    {
        return $this->audioSourceId;
    }

    public function getScreenSharingAudioSourceId(): int
    {
        return $this->screenSharingAudioSourceId;
    }

    public function getVideoInfo(): ?GroupCallParticipantVideoInfo
    {
        return $this->videoInfo;
    }

    public function getScreenSharingVideoInfo(): ?GroupCallParticipantVideoInfo
    {
        return $this->screenSharingVideoInfo;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function getIsCurrentUser(): bool
    {
        return $this->isCurrentUser;
    }

    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }

    public function getIsHandRaised(): bool
    {
        return $this->isHandRaised;
    }

    public function getCanBeMutedForAllUsers(): bool
    {
        return $this->canBeMutedForAllUsers;
    }

    public function getCanBeUnmutedForAllUsers(): bool
    {
        return $this->canBeUnmutedForAllUsers;
    }

    public function getCanBeMutedForCurrentUser(): bool
    {
        return $this->canBeMutedForCurrentUser;
    }

    public function getCanBeUnmutedForCurrentUser(): bool
    {
        return $this->canBeUnmutedForCurrentUser;
    }

    public function getIsMutedForAllUsers(): bool
    {
        return $this->isMutedForAllUsers;
    }

    public function getIsMutedForCurrentUser(): bool
    {
        return $this->isMutedForCurrentUser;
    }

    public function getCanUnmuteSelf(): bool
    {
        return $this->canUnmuteSelf;
    }

    public function getVolumeLevel(): int
    {
        return $this->volumeLevel;
    }

    public function getOrder(): string
    {
        return $this->order;
    }
}
