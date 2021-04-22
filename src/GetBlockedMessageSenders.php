<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns users and chats that were blocked by the current user.
 */
class GetBlockedMessageSenders extends TdFunction
{
    public const TYPE_NAME = 'getBlockedMessageSenders';

    /**
     * Number of users and chats to skip in the result; must be non-negative.
     */
    protected int $offset;

    /**
     * The maximum number of users and chats to return; up to 100.
     */
    protected int $limit;

    public function __construct(int $offset, int $limit)
    {
        $this->offset = $offset;
        $this->limit  = $limit;
    }

    public static function fromArray(array $array): GetBlockedMessageSenders
    {
        return new static(
            $array['offset'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'offset' => $this->offset,
            'limit'  => $this->limit,
        ];
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
