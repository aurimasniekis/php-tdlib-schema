<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for the specified query in the first names, last names and usernames of the known user contacts.
 */
class SearchContacts extends TdFunction
{
    public const TYPE_NAME = 'searchContacts';

    /**
     * Query to search for; may be empty to return all contacts.
     */
    protected string $query;

    /**
     * The maximum number of users to be returned.
     */
    protected int $limit;

    public function __construct(string $query, int $limit)
    {
        $this->query = $query;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): SearchContacts
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
