<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for messages in all chats except secret chats. Returns the results in reverse chronological order (i.e., in order of decreasing (date, chat_id, message_id)). For optimal performance the number of returned messages is chosen by the library
 */
class SearchMessages extends TdFunction
{
    public const TYPE_NAME = 'searchMessages';

    /**
     * Chat list in which to search messages; pass null to search in all chats regardless of their chat list
     *
     * @var ChatList
     */
    protected ChatList $chatList;

    /**
     * Query to search for
     *
     * @var string
     */
    protected string $query;

    /**
     * The date of the message starting from which the results should be fetched. Use 0 or any date in the future to get results from the last message
     *
     * @var int
     */
    protected int $offsetDate;

    /**
     * The chat identifier of the last found message, or 0 for the first request
     *
     * @var int
     */
    protected int $offsetChatId;

    /**
     * The message identifier of the last found message, or 0 for the first request
     *
     * @var int
     */
    protected int $offsetMessageId;

    /**
     * The maximum number of messages to be returned; up to 100. Fewer messages may be returned than specified by the limit, even if the end of the message history has not been reached
     *
     * @var int
     */
    protected int $limit;

    /**
     * Filter for message content in the search results; searchMessagesFilterCall, searchMessagesFilterMissedCall, searchMessagesFilterMention, searchMessagesFilterUnreadMention, searchMessagesFilterFailedToSend and searchMessagesFilterPinned are unsupported in this function
     *
     * @var SearchMessagesFilter
     */
    protected SearchMessagesFilter $filter;

    /**
     * If not 0, the minimum date of the messages to return
     *
     * @var int
     */
    protected int $minDate;

    /**
     * If not 0, the maximum date of the messages to return
     *
     * @var int
     */
    protected int $maxDate;

    public function __construct(
        ChatList $chatList,
        string $query,
        int $offsetDate,
        int $offsetChatId,
        int $offsetMessageId,
        int $limit,
        SearchMessagesFilter $filter,
        int $minDate,
        int $maxDate
    ) {
        $this->chatList = $chatList;
        $this->query = $query;
        $this->offsetDate = $offsetDate;
        $this->offsetChatId = $offsetChatId;
        $this->offsetMessageId = $offsetMessageId;
        $this->limit = $limit;
        $this->filter = $filter;
        $this->minDate = $minDate;
        $this->maxDate = $maxDate;
    }

    public static function fromArray(array $array): SearchMessages
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['query'],
            $array['offset_date'],
            $array['offset_chat_id'],
            $array['offset_message_id'],
            $array['limit'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['min_date'],
            $array['max_date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_list' => $this->chatList->typeSerialize(),
            'query' => $this->query,
            'offset_date' => $this->offsetDate,
            'offset_chat_id' => $this->offsetChatId,
            'offset_message_id' => $this->offsetMessageId,
            'limit' => $this->limit,
            'filter' => $this->filter->typeSerialize(),
            'min_date' => $this->minDate,
            'max_date' => $this->maxDate,
        ];
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getOffsetDate(): int
    {
        return $this->offsetDate;
    }

    public function getOffsetChatId(): int
    {
        return $this->offsetChatId;
    }

    public function getOffsetMessageId(): int
    {
        return $this->offsetMessageId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getFilter(): SearchMessagesFilter
    {
        return $this->filter;
    }

    public function getMinDate(): int
    {
        return $this->minDate;
    }

    public function getMaxDate(): int
    {
        return $this->maxDate;
    }
}
