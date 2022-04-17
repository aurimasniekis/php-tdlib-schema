<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for the specified query in the title and username of already known chats, this is an offline request. Returns chats in the order seen in the main chat list
 */
class SearchChats extends TdFunction
{
    public const TYPE_NAME = 'searchChats';

    /**
     * Query to search for. If the query is empty, returns up to 50 recently found chats
     *
     * @var string
     */
    protected string $query;

    /**
     * The maximum number of chats to be returned
     *
     * @var int
     */
    protected int $limit;

    public function __construct(string $query, int $limit)
    {
        $this->query = $query;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): SearchChats
    {
        return new static(
            $array['query'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
            'limit' => $this->limit,
        ];
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
