<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the order of pinned chats.
 */
class SetPinnedChats extends TdFunction
{
    public const TYPE_NAME = 'setPinnedChats';

    /**
     * Chat list in which to change the order of pinned chats.
     */
    protected ChatList $chatList;

    /**
     * The new list of pinned chats.
     *
     * @var int[]
     */
    protected array $chatIds;

    public function __construct(ChatList $chatList, array $chatIds)
    {
        $this->chatList = $chatList;
        $this->chatIds  = $chatIds;
    }

    public static function fromArray(array $array): SetPinnedChats
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['chat_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_list' => $this->chatList->typeSerialize(),
            'chat_ids'  => $this->chatIds,
        ];
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }
}
