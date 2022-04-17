<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for messages with given words in the chat. Returns the results in reverse chronological order, i.e. in order of decreasing message_id. Cannot be used in secret chats with a non-empty query (searchSecretMessages must be used instead), or without an enabled message database. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit
 */
class SearchChatMessages extends TdFunction
{
    public const TYPE_NAME = 'searchChatMessages';

    /**
     * Identifier of the chat in which to search messages
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Query to search for
     *
     * @var string
     */
    protected string $query;

    /**
     * Identifier of the sender of messages to search for; pass null to search for messages from any sender. Not supported in secret chats
     *
     * @var MessageSender
     */
    protected MessageSender $senderId;

    /**
     * Identifier of the message starting from which history must be fetched; use 0 to get results from the last message
     *
     * @var int
     */
    protected int $fromMessageId;

    /**
     * Specify 0 to get results from exactly the from_message_id or a negative offset to get the specified message and some newer messages
     *
     * @var int
     */
    protected int $offset;

    /**
     * The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than -offset. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit
     *
     * @var int
     */
    protected int $limit;

    /**
     * Additional filter for messages to search; pass null to search for all messages
     *
     * @var SearchMessagesFilter
     */
    protected SearchMessagesFilter $filter;

    /**
     * If not 0, only messages in the specified thread will be returned; supergroups only
     *
     * @var int
     */
    protected int $messageThreadId;

    public function __construct(
        int $chatId,
        string $query,
        MessageSender $senderId,
        int $fromMessageId,
        int $offset,
        int $limit,
        SearchMessagesFilter $filter,
        int $messageThreadId
    ) {
        $this->chatId = $chatId;
        $this->query = $query;
        $this->senderId = $senderId;
        $this->fromMessageId = $fromMessageId;
        $this->offset = $offset;
        $this->limit = $limit;
        $this->filter = $filter;
        $this->messageThreadId = $messageThreadId;
    }

    public static function fromArray(array $array): SearchChatMessages
    {
        return new static(
            $array['chat_id'],
            $array['query'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['from_message_id'],
            $array['offset'],
            $array['limit'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['message_thread_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'query' => $this->query,
            'sender_id' => $this->senderId->typeSerialize(),
            'from_message_id' => $this->fromMessageId,
            'offset' => $this->offset,
            'limit' => $this->limit,
            'filter' => $this->filter->typeSerialize(),
            'message_thread_id' => $this->messageThreadId,
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

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
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

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }
}
