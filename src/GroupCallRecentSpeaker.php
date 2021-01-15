<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a recently speaking user in a group call.
 */
class GroupCallRecentSpeaker extends TdObject
{
    public const TYPE_NAME = 'groupCallRecentSpeaker';

    /**
     * User identifier.
     */
    protected int $userId;

    /**
     * True, is the user has spoken recently.
     */
    protected bool $isSpeaking;

    public function __construct(int $userId, bool $isSpeaking)
    {
        $this->userId     = $userId;
        $this->isSpeaking = $isSpeaking;
    }

    public static function fromArray(array $array): GroupCallRecentSpeaker
    {
        return new static(
            $array['user_id'],
            $array['is_speaking'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'user_id'     => $this->userId,
            'is_speaking' => $this->isSpeaking,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }
}
