<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A voice chat participant was muted or unmuted.
 */
class ChatEventVoiceChatParticipantIsMutedToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventVoiceChatParticipantIsMutedToggled';

    /**
     * Identifier of the affected user.
     */
    protected int $userId;

    /**
     * New value of is_muted.
     */
    protected bool $isMuted;

    public function __construct(int $userId, bool $isMuted)
    {
        parent::__construct();

        $this->userId  = $userId;
        $this->isMuted = $isMuted;
    }

    public static function fromArray(array $array): ChatEventVoiceChatParticipantIsMutedToggled
    {
        return new static(
            $array['user_id'],
            $array['is_muted'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'user_id'  => $this->userId,
            'is_muted' => $this->isMuted,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }
}
