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
     */
    protected int $chatId;

    /**
     * Query to search for. If empty, searchChatMessages should be used instead.
     */
    protected string $query;

    /**
     * Offset of the first entry to return as received from the previous request; use empty string to get first chunk of results.
     */
    protected string $offset;

    /**
     * The maximum number of messages to be returned; up to 100. Fewer messages may be returned than specified by the limit, even if the end of the message history has not been reached.
     */
    protected int $limit;

    /**
     * A filter for message content in the search results.
     */
    protected SearchMessagesFilter $filter;

    public function __construct(int $chatId, string $query, string $offset, int $limit, SearchMessagesFilter $filter)
    {
        $this->chatId = $chatId;
        $this->query  = $query;
        $this->offset = $offset;
        $this->limit  = $limit;
        $this->filter = $filter;
    }

    public static function fromArray(array $array): SearchSecretMessages
    {
        return new static(
            $array['chat_id'],
            $array['query'],
            $array['offset'],
            $array['limit'],
            TdSchemaRegistry::fromArray($array['filter']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'query'   => $this->query,
            'offset'  => $this->offset,
            'limit'   => $this->limit,
            'filter'  => $this->filter->typeSerialize(),
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

    public function getOffset(): string
    {
        return $this->offset;
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
