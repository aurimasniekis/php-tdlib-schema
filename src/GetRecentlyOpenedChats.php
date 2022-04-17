<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns recently opened chats, this is an offline request. Returns chats in the order of last opening
 */
class GetRecentlyOpenedChats extends TdFunction
{
    public const TYPE_NAME = 'getRecentlyOpenedChats';

    /**
     * The maximum number of chats to be returned
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $limit)
    {
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetRecentlyOpenedChats
    {
        return new static(
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'limit' => $this->limit,
        ];
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
