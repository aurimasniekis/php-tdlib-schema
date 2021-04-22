<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns approximate number of messages of the specified type in the chat.
 */
class GetChatMessageCount extends TdFunction
{
    public const TYPE_NAME = 'getChatMessageCount';

    /**
     * Identifier of the chat in which to count messages.
     */
    protected int $chatId;

    /**
     * Filter for message content; searchMessagesFilterEmpty is unsupported in this function.
     */
    protected SearchMessagesFilter $filter;

    /**
     * If true, returns count that is available locally without sending network requests, returning -1 if the number of messages is unknown.
     */
    protected bool $returnLocal;

    public function __construct(int $chatId, SearchMessagesFilter $filter, bool $returnLocal)
    {
        $this->chatId      = $chatId;
        $this->filter      = $filter;
        $this->returnLocal = $returnLocal;
    }

    public static function fromArray(array $array): GetChatMessageCount
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['return_local'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'filter'       => $this->filter->typeSerialize(),
            'return_local' => $this->returnLocal,
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

    public function getReturnLocal(): bool
    {
        return $this->returnLocal;
    }
}
