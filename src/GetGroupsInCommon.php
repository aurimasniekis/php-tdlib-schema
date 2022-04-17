<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of common group chats with a given user. Chats are sorted by their type and creation date
 */
class GetGroupsInCommon extends TdFunction
{
    public const TYPE_NAME = 'getGroupsInCommon';

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    /**
     * Chat identifier starting from which to return chats; use 0 for the first request
     *
     * @var int
     */
    protected int $offsetChatId;

    /**
     * The maximum number of chats to be returned; up to 100
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $userId, int $offsetChatId, int $limit)
    {
        $this->userId = $userId;
        $this->offsetChatId = $offsetChatId;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetGroupsInCommon
    {
        return new static(
            $array['user_id'],
            $array['offset_chat_id'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'offset_chat_id' => $this->offsetChatId,
            'limit' => $this->limit,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getOffsetChatId(): int
    {
        return $this->offsetChatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
