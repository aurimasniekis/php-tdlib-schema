<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Moves a chat to a different chat list. Current chat list of the chat must ne non-null.
 */
class SetChatChatList extends TdFunction
{
    public const TYPE_NAME = 'setChatChatList';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New chat list of the chat. The chat with the current user (Saved Messages) and the chat 777000 (Telegram) can't be moved to the Archive chat list.
     *
     * @var ChatList
     */
    protected ChatList $chatList;

    public function __construct(int $chatId, ChatList $chatList)
    {
        $this->chatId   = $chatId;
        $this->chatList = $chatList;
    }

    public static function fromArray(array $array): SetChatChatList
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['chat_list']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'chat_list' => $this->chatList->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }
}
