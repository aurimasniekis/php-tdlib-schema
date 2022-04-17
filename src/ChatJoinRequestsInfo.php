<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about pending join requests for a chat
 */
class ChatJoinRequestsInfo extends TdObject
{
    public const TYPE_NAME = 'chatJoinRequestsInfo';

    /**
     * Total number of pending join requests
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * Identifiers of at most 3 users sent the newest pending join requests
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(int $totalCount, array $userIds)
    {
        $this->totalCount = $totalCount;
        $this->userIds = $userIds;
    }

    public static function fromArray(array $array): ChatJoinRequestsInfo
    {
        return new static(
            $array['total_count'],
            $array['user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'user_ids' => $this->userIds,
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }
}
