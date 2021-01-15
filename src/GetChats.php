<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an ordered list of chats in a chat list. Chats are sorted by the pair (chat.position.order, chat.id) in descending order. (For example, to get a list of chats from the beginning, the offset_order should be equal to a biggest signed 64-bit number 9223372036854775807 == 2^63 - 1). For optimal performance the number of returned chats is chosen by the library.
 */
class GetChats extends TdFunction
{
    public const TYPE_NAME = 'getChats';

    /**
     * The chat list in which to return chats.
     */
    protected ChatList $chatList;

    /**
     * Chat order to return chats from.
     */
    protected string $offsetOrder;

    /**
     * Chat identifier to return chats from.
     */
    protected int $offsetChatId;

    /**
     * The maximum number of chats to be returned. It is possible that fewer chats than the limit are returned even if the end of the list is not reached.
     */
    protected int $limit;

    public function __construct(ChatList $chatList, string $offsetOrder, int $offsetChatId, int $limit)
    {
        $this->chatList     = $chatList;
        $this->offsetOrder  = $offsetOrder;
        $this->offsetChatId = $offsetChatId;
        $this->limit        = $limit;
    }

    public static function fromArray(array $array): GetChats
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['offset_order'],
            $array['offset_chat_id'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_list'      => $this->chatList->typeSerialize(),
            'offset_order'   => $this->offsetOrder,
            'offset_chat_id' => $this->offsetChatId,
            'limit'          => $this->limit,
        ];
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getOffsetOrder(): string
    {
        return $this->offsetOrder;
    }

    public function getOffsetChatId(): int
    {
        return $this->offsetChatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
