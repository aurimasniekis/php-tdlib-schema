<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an ordered list of chats from the beginning of a chat list. For informational purposes only. Use loadChats and updates processing instead to maintain chat lists in a consistent state
 */
class GetChats extends TdFunction
{
    public const TYPE_NAME = 'getChats';

    /**
     * The chat list in which to return chats; pass null to get chats from the main chat list
     *
     * @var ChatList
     */
    protected ChatList $chatList;

    /**
     * The maximum number of chats to be returned
     *
     * @var int
     */
    protected int $limit;

    public function __construct(ChatList $chatList, int $limit)
    {
        $this->chatList = $chatList;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetChats
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_list' => $this->chatList->typeSerialize(),
            'limit' => $this->limit,
        ];
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
