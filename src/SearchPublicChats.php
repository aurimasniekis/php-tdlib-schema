<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches public chats by looking for specified query in their username and title. Currently only private chats, supergroups and channels can be public. Returns a meaningful number of results. Returns nothing if the length of the searched username prefix is less than 5. Excludes private chats with contacts and chats from the chat list from the results
 */
class SearchPublicChats extends TdFunction
{
    public const TYPE_NAME = 'searchPublicChats';

    /**
     * Query to search for
     *
     * @var string
     */
    protected string $query;

    public function __construct(string $query)
    {
        $this->query = $query;
    }

    public static function fromArray(array $array): SearchPublicChats
    {
        return new static(
            $array['query'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
        ];
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}
