<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns sparse positions of messages of the specified type in the chat to be used for shared media scroll implementation. Returns the results in reverse chronological order (i.e., in order of decreasing message_id). Cannot be used in secret chats or with searchMessagesFilterFailedToSend filter without an enabled message database
 */
class GetChatSparseMessagePositions extends TdFunction
{
    public const TYPE_NAME = 'getChatSparseMessagePositions';

    /**
     * Identifier of the chat in which to return information about message positions
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Filter for message content. Filters searchMessagesFilterEmpty, searchMessagesFilterMention and searchMessagesFilterUnreadMention are unsupported in this function
     *
     * @var SearchMessagesFilter
     */
    protected SearchMessagesFilter $filter;

    /**
     * The message identifier from which to return information about message positions
     *
     * @var int
     */
    protected int $fromMessageId;

    /**
     * The expected number of message positions to be returned; 50-2000. A smaller number of positions can be returned, if there are not enough appropriate messages
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $chatId, SearchMessagesFilter $filter, int $fromMessageId, int $limit)
    {
        $this->chatId = $chatId;
        $this->filter = $filter;
        $this->fromMessageId = $fromMessageId;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetChatSparseMessagePositions
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['from_message_id'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'filter' => $this->filter->typeSerialize(),
            'from_message_id' => $this->fromMessageId,
            'limit' => $this->limit,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFilter(): SearchMessagesFilter
    {
        return $this->filter;
    }

    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
