<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains statistics about number of new members invited by a user
 */
class ChatStatisticsInviterInfo extends TdObject
{
    public const TYPE_NAME = 'chatStatisticsInviterInfo';

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    /**
     * Number of new members invited by the user
     *
     * @var int
     */
    protected int $addedMemberCount;

    public function __construct(int $userId, int $addedMemberCount)
    {
        $this->userId = $userId;
        $this->addedMemberCount = $addedMemberCount;
    }

    public static function fromArray(array $array): ChatStatisticsInviterInfo
    {
        return new static(
            $array['user_id'],
            $array['added_member_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'added_member_count' => $this->addedMemberCount,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getAddedMemberCount(): int
    {
        return $this->addedMemberCount;
    }
}
