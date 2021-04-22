<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for the specified query in the title and username of already known chats via request to the server. Returns chats in the order seen in the main chat list.
 */
class SearchChatsOnServer extends TdFunction
{
    public const TYPE_NAME = 'searchChatsOnServer';

    /**
     * Query to search for.
     */
    protected string $query;

    /**
     * The maximum number of chats to be returned.
     */
    protected int $limit;

    public function __construct(string $query, int $limit)
    {
        $this->query = $query;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): SearchChatsOnServer
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
