<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a group call participant.
 */
class GroupCallParticipant extends TdObject
{
    public const TYPE_NAME = 'groupCallParticipant';

    /**
     * Identifier of the user.
     */
    protected int $userId;

    /**
     * User's synchronization source.
     */
    protected int $source;

    /**
     * True, if the participant is speaking as set by setGroupCallParticipantIsSpeaking.
     */
    protected bool $isSpeaking;

    /**
     * True, if the current user can mute the participant.
     */
    protected bool $canBeMuted;

    /**
     * True, if the current user can allow the participant to unmute themself or unmute the participant (only for self).
     */
    protected bool $canBeUnmuted;

    /**
     * True, if the participant is muted.
     */
    protected bool $isMuted;

    /**
     * True, if the participant can unmute themself.
     */
    protected bool $canUnmuteSelf;

    /**
     * User's order in the group call participant list. The bigger is order, the higher is user in the list. If order is 0, the user must be removed from the participant list.
     */
    protected string $order;

    public function __construct(
        int $userId,
        int $source,
        bool $isSpeaking,
        bool $canBeMuted,
        bool $canBeUnmuted,
        bool $isMuted,
        bool $canUnmuteSelf,
        string $order
    ) {
        $this->userId        = $userId;
        $this->source        = $source;
        $this->isSpeaking    = $isSpeaking;
        $this->canBeMuted    = $canBeMuted;
        $this->canBeUnmuted  = $canBeUnmuted;
        $this->isMuted       = $isMuted;
        $this->canUnmuteSelf = $canUnmuteSelf;
        $this->order         = $order;
    }

    public static function fromArray(array $array): GroupCallParticipant
    {
        return new static(
            $array['user_id'],
            $array['source'],
            $array['is_speaking'],
            $array['can_be_muted'],
            $array['can_be_unmuted'],
            $array['is_muted'],
            $array['can_unmute_self'],
            $array['order'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'user_id'         => $this->userId,
            'source'          => $this->source,
            'is_speaking'     => $this->isSpeaking,
            'can_be_muted'    => $this->canBeMuted,
            'can_be_unmuted'  => $this->canBeUnmuted,
            'is_muted'        => $this->isMuted,
            'can_unmute_self' => $this->canUnmuteSelf,
            'order'           => $this->order,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getSource(): int
    {
        return $this->source;
    }

    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }

    public function getCanBeMuted(): bool
    {
        return $this->canBeMuted;
    }

    public function getCanBeUnmuted(): bool
    {
        return $this->canBeUnmuted;
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    public function getCanUnmuteSelf(): bool
    {
        return $this->canUnmuteSelf;
    }

    public function getOrder(): string
    {
        return $this->order;
    }
}
