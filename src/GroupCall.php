<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a group call
 */
class GroupCall extends TdObject
{
    public const TYPE_NAME = 'groupCall';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * Group call title
     *
     * @var string
     */
    protected string $title;

    /**
     * Point in time (Unix timestamp) when the group call is supposed to be started by an administrator; 0 if it is already active or was ended
     *
     * @var int
     */
    protected int $scheduledStartDate;

    /**
     * True, if the group call is scheduled and the current user will receive a notification when the group call will start
     *
     * @var bool
     */
    protected bool $enabledStartNotification;

    /**
     * True, if the call is active
     *
     * @var bool
     */
    protected bool $isActive;

    /**
     * True, if the call is joined
     *
     * @var bool
     */
    protected bool $isJoined;

    /**
     * True, if user was kicked from the call because of network loss and the call needs to be rejoined
     *
     * @var bool
     */
    protected bool $needRejoin;

    /**
     * True, if the current user can manage the group call
     *
     * @var bool
     */
    protected bool $canBeManaged;

    /**
     * Number of participants in the group call
     *
     * @var int
     */
    protected int $participantCount;

    /**
     * True, if all group call participants are loaded
     *
     * @var bool
     */
    protected bool $loadedAllParticipants;

    /**
     * At most 3 recently speaking users in the group call
     *
     * @var GroupCallRecentSpeaker[]
     */
    protected array $recentSpeakers;

    /**
     * True, if the current user's video is enabled
     *
     * @var bool
     */
    protected bool $isMyVideoEnabled;

    /**
     * True, if the current user's video is paused
     *
     * @var bool
     */
    protected bool $isMyVideoPaused;

    /**
     * True, if the current user can broadcast video or share screen
     *
     * @var bool
     */
    protected bool $canEnableVideo;

    /**
     * True, if only group call administrators can unmute new participants
     *
     * @var bool
     */
    protected bool $muteNewParticipants;

    /**
     * True, if the current user can enable or disable mute_new_participants setting
     *
     * @var bool
     */
    protected bool $canToggleMuteNewParticipants;

    /**
     * Duration of the ongoing group call recording, in seconds; 0 if none. An updateGroupCall update is not triggered when value of this field changes, but the same recording goes on
     *
     * @var int
     */
    protected int $recordDuration;

    /**
     * True, if a video file is being recorded for the call
     *
     * @var bool
     */
    protected bool $isVideoRecorded;

    /**
     * Call duration, in seconds; for ended calls only
     *
     * @var int
     */
    protected int $duration;

    public function __construct(
        int $id,
        string $title,
        int $scheduledStartDate,
        bool $enabledStartNotification,
        bool $isActive,
        bool $isJoined,
        bool $needRejoin,
        bool $canBeManaged,
        int $participantCount,
        bool $loadedAllParticipants,
        array $recentSpeakers,
        bool $isMyVideoEnabled,
        bool $isMyVideoPaused,
        bool $canEnableVideo,
        bool $muteNewParticipants,
        bool $canToggleMuteNewParticipants,
        int $recordDuration,
        bool $isVideoRecorded,
        int $duration
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->scheduledStartDate = $scheduledStartDate;
        $this->enabledStartNotification = $enabledStartNotification;
        $this->isActive = $isActive;
        $this->isJoined = $isJoined;
        $this->needRejoin = $needRejoin;
        $this->canBeManaged = $canBeManaged;
        $this->participantCount = $participantCount;
        $this->loadedAllParticipants = $loadedAllParticipants;
        $this->recentSpeakers = $recentSpeakers;
        $this->isMyVideoEnabled = $isMyVideoEnabled;
        $this->isMyVideoPaused = $isMyVideoPaused;
        $this->canEnableVideo = $canEnableVideo;
        $this->muteNewParticipants = $muteNewParticipants;
        $this->canToggleMuteNewParticipants = $canToggleMuteNewParticipants;
        $this->recordDuration = $recordDuration;
        $this->isVideoRecorded = $isVideoRecorded;
        $this->duration = $duration;
    }

    public static function fromArray(array $array): GroupCall
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['scheduled_start_date'],
            $array['enabled_start_notification'],
            $array['is_active'],
            $array['is_joined'],
            $array['need_rejoin'],
            $array['can_be_managed'],
            $array['participant_count'],
            $array['loaded_all_participants'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_speakers']),
            $array['is_my_video_enabled'],
            $array['is_my_video_paused'],
            $array['can_enable_video'],
            $array['mute_new_participants'],
            $array['can_toggle_mute_new_participants'],
            $array['record_duration'],
            $array['is_video_recorded'],
            $array['duration'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'title' => $this->title,
            'scheduled_start_date' => $this->scheduledStartDate,
            'enabled_start_notification' => $this->enabledStartNotification,
            'is_active' => $this->isActive,
            'is_joined' => $this->isJoined,
            'need_rejoin' => $this->needRejoin,
            'can_be_managed' => $this->canBeManaged,
            'participant_count' => $this->participantCount,
            'loaded_all_participants' => $this->loadedAllParticipants,
            array_map(fn($x) => $x->typeSerialize(), $this->recentSpeakers),
            'is_my_video_enabled' => $this->isMyVideoEnabled,
            'is_my_video_paused' => $this->isMyVideoPaused,
            'can_enable_video' => $this->canEnableVideo,
            'mute_new_participants' => $this->muteNewParticipants,
            'can_toggle_mute_new_participants' => $this->canToggleMuteNewParticipants,
            'record_duration' => $this->recordDuration,
            'is_video_recorded' => $this->isVideoRecorded,
            'duration' => $this->duration,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getScheduledStartDate(): int
    {
        return $this->scheduledStartDate;
    }

    public function getEnabledStartNotification(): bool
    {
        return $this->enabledStartNotification;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function getIsJoined(): bool
    {
        return $this->isJoined;
    }

    public function getNeedRejoin(): bool
    {
        return $this->needRejoin;
    }

    public function getCanBeManaged(): bool
    {
        return $this->canBeManaged;
    }

    public function getParticipantCount(): int
    {
        return $this->participantCount;
    }

    public function getLoadedAllParticipants(): bool
    {
        return $this->loadedAllParticipants;
    }

    public function getRecentSpeakers(): array
    {
        return $this->recentSpeakers;
    }

    public function getIsMyVideoEnabled(): bool
    {
        return $this->isMyVideoEnabled;
    }

    public function getIsMyVideoPaused(): bool
    {
        return $this->isMyVideoPaused;
    }

    public function getCanEnableVideo(): bool
    {
        return $this->canEnableVideo;
    }

    public function getMuteNewParticipants(): bool
    {
        return $this->muteNewParticipants;
    }

    public function getCanToggleMuteNewParticipants(): bool
    {
        return $this->canToggleMuteNewParticipants;
    }

    public function getRecordDuration(): int
    {
        return $this->recordDuration;
    }

    public function getIsVideoRecorded(): bool
    {
        return $this->isVideoRecorded;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }
}
