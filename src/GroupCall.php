<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a group call.
 */
class GroupCall extends TdObject
{
    public const TYPE_NAME = 'groupCall';

    /**
     * Group call identifier.
     */
    protected int $id;

    /**
     * True, if the call is active.
     */
    protected bool $isActive;

    /**
     * True, if the call is joined.
     */
    protected bool $isJoined;

    /**
     * True, if user was kicked from the call because of network loss and the call needs to be rejoined.
     */
    protected bool $needRejoin;

    /**
     * True, if the current user can unmute themself.
     */
    protected bool $canUnmuteSelf;

    /**
     * True, if the current user can manage the group call.
     */
    protected bool $canBeManaged;

    /**
     * Number of participants in the group call.
     */
    protected int $participantCount;

    /**
     * True, if all group call participants are loaded.
     */
    protected bool $loadedAllParticipants;

    /**
     * Recently speaking users in the group call.
     *
     * @var GroupCallRecentSpeaker[]
     */
    protected array $recentSpeakers;

    /**
     * True, if only group call administrators can unmute new participants.
     */
    protected bool $muteNewParticipants;

    /**
     * True, if group call administrators can enable or disable mute_new_participants setting.
     */
    protected bool $allowedChangeMuteNewParticipants;

    /**
     * Call duration; for ended calls only.
     */
    protected int $duration;

    public function __construct(
        int $id,
        bool $isActive,
        bool $isJoined,
        bool $needRejoin,
        bool $canUnmuteSelf,
        bool $canBeManaged,
        int $participantCount,
        bool $loadedAllParticipants,
        array $recentSpeakers,
        bool $muteNewParticipants,
        bool $allowedChangeMuteNewParticipants,
        int $duration
    ) {
        $this->id                               = $id;
        $this->isActive                         = $isActive;
        $this->isJoined                         = $isJoined;
        $this->needRejoin                       = $needRejoin;
        $this->canUnmuteSelf                    = $canUnmuteSelf;
        $this->canBeManaged                     = $canBeManaged;
        $this->participantCount                 = $participantCount;
        $this->loadedAllParticipants            = $loadedAllParticipants;
        $this->recentSpeakers                   = $recentSpeakers;
        $this->muteNewParticipants              = $muteNewParticipants;
        $this->allowedChangeMuteNewParticipants = $allowedChangeMuteNewParticipants;
        $this->duration                         = $duration;
    }

    public static function fromArray(array $array): GroupCall
    {
        return new static(
            $array['id'],
            $array['is_active'],
            $array['is_joined'],
            $array['need_rejoin'],
            $array['can_unmute_self'],
            $array['can_be_managed'],
            $array['participant_count'],
            $array['loaded_all_participants'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['recentSpeakers']),
            $array['mute_new_participants'],
            $array['allowed_change_mute_new_participants'],
            $array['duration'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                => static::TYPE_NAME,
            'id'                                   => $this->id,
            'is_active'                            => $this->isActive,
            'is_joined'                            => $this->isJoined,
            'need_rejoin'                          => $this->needRejoin,
            'can_unmute_self'                      => $this->canUnmuteSelf,
            'can_be_managed'                       => $this->canBeManaged,
            'participant_count'                    => $this->participantCount,
            'loaded_all_participants'              => $this->loadedAllParticipants,
            array_map(fn ($x)                      => $x->typeSerialize(), $this->recentSpeakers),
            'mute_new_participants'                => $this->muteNewParticipants,
            'allowed_change_mute_new_participants' => $this->allowedChangeMuteNewParticipants,
            'duration'                             => $this->duration,
        ];
    }

    public function getId(): int
    {
        return $this->id;
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

    public function getCanUnmuteSelf(): bool
    {
        return $this->canUnmuteSelf;
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

    public function getMuteNewParticipants(): bool
    {
        return $this->muteNewParticipants;
    }

    public function getAllowedChangeMuteNewParticipants(): bool
    {
        return $this->allowedChangeMuteNewParticipants;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }
}
