<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for messages in secret chats. Returns the results in reverse chronological order. For optimal performance the number of returned messages is chosen by the library.
 */
class SearchSecretMessages extends TdFunction
{
    public const TYPE_NAME = 'searchSecretMessages';

    /**
     * Identifier of the chat in which to search. Specify 0 to search in all secret chats.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Query to search for. If empty, searchChatMessages should be used instead.
     *
     * @var string
     */
    protected string $query;

    /**
     * The identifier from the result of a previous request, use 0 to get results from the last message.
     *
     * @var int
     */
    protected int $fromSearchId;

    /**
     * The maximum number of messages to be returned; up to 100. Fewer messages may be returned than specified by the limit, even if the end of the message history has not been reached.
     *
     * @var int
     */
    protected int $limit;

    /**
     * A filter for the content of messages in the search results.
     *
     * @var SearchMessagesFilter
     */
    protected SearchMessagesFilter $filter;

    public function __construct(int $chatId, string $query, int $fromSearchId, int $limit, SearchMessagesFilter $filter)
    {
        $this->chatId       = $chatId;
        $this->query        = $query;
        $this->fromSearchId = $fromSearchId;
        $this->limit        = $limit;
        $this->filter       = $filter;
    }

    public static function fromArray(array $array): SearchSecretMessages
    {
        return new static(
            $array['chat_id'],
            $array['query'],
            $array['from_search_id'],
            $array['limit'],
            TdSchemaRegistry::fromArray($array['filter']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'query'          => $this->query,
            'from_search_id' => $this->fromSearchId,
            'limit'          => $this->limit,
            'filter'         => $this->filter->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getFromSearchId(): int
    {
        return $this->fromSearchId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getFilter(): SearchMessagesFilter
    {
        return $this->filter;
    }
}
