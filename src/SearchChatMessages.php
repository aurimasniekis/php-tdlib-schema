<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for messages with given words in the chat. Returns the results in reverse chronological order, i.e. in order of decreasing message_id. Cannot be used in secret chats with a non-empty query (searchSecretMessages should be used instead), or without an enabled message database. For optimal performance the number of returned messages is chosen by the library.
 */
class SearchChatMessages extends TdFunction
{
    public const TYPE_NAME = 'searchChatMessages';

    /**
     * Identifier of the chat in which to search messages.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Query to search for.
     *
     * @var string
     */
    protected string $query;

    /**
     * If not 0, only messages sent by the specified user will be returned. Not supported in secret chats.
     *
     * @var int
     */
    protected int $senderUserId;

    /**
     * Identifier of the message starting from which history must be fetched; use 0 to get results from the last message.
     *
     * @var int
     */
    protected int $fromMessageId;

    /**
     * Specify 0 to get results from exactly the from_message_id or a negative offset to get the specified message and some newer messages.
     *
     * @var int
     */
    protected int $offset;

    /**
     * The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than -offset. Fewer messages may be returned than specified by the limit, even if the end of the message history has not been reached.
     *
     * @var int
     */
    protected int $limit;

    /**
     * Filter for message content in the search results.
     *
     * @var SearchMessagesFilter
     */
    protected SearchMessagesFilter $filter;

    public function __construct(int $chatId, string $query, int $senderUserId, int $fromMessageId, int $offset, int $limit, SearchMessagesFilter $filter)
    {
        $this->chatId        = $chatId;
        $this->query         = $query;
        $this->senderUserId  = $senderUserId;
        $this->fromMessageId = $fromMessageId;
        $this->offset        = $offset;
        $this->limit         = $limit;
        $this->filter        = $filter;
    }

    public static function fromArray(array $array): SearchChatMessages
    {
        return new static(
            $array['chat_id'],
            $array['query'],
            $array['sender_user_id'],
            $array['from_message_id'],
            $array['offset'],
            $array['limit'],
            TdSchemaRegistry::fromArray($array['filter']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'query'           => $this->query,
            'sender_user_id'  => $this->senderUserId,
            'from_message_id' => $this->fromMessageId,
            'offset'          => $this->offset,
            'limit'           => $this->limit,
            'filter'          => $this->filter->typeSerialize(),
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

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    public function getOffset(): int
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
