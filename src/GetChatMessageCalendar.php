<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about the next messages of the specified type in the chat split by days. Returns the results in reverse chronological order. Can return partial result for the last returned day. Behavior of this method depends on the value of the option "utc_time_offset"
 */
class GetChatMessageCalendar extends TdFunction
{
    public const TYPE_NAME = 'getChatMessageCalendar';

    /**
     * Identifier of the chat in which to return information about messages
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
     * The message identifier from which to return information about messages; use 0 to get results from the last message
     *
     * @var int
     */
    protected int $fromMessageId;

    public function __construct(int $chatId, SearchMessagesFilter $filter, int $fromMessageId)
    {
        $this->chatId = $chatId;
        $this->filter = $filter;
        $this->fromMessageId = $fromMessageId;
    }

    public static function fromArray(array $array): GetChatMessageCalendar
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['from_message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'filter' => $this->filter->typeSerialize(),
            'from_message_id' => $this->fromMessageId,
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
}
