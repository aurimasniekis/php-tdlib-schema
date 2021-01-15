<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Adds a chat to a chat list. A chat can't be simultaneously in Main and Archive chat lists, so it is automatically removed from another one if needed.
 */
class AddChatToList extends TdFunction
{
    public const TYPE_NAME = 'addChatToList';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * The chat list. Use getChatListsToAddChat to get suitable chat lists.
     */
    protected ChatList $chatList;

    public function __construct(int $chatId, ChatList $chatList)
    {
        $this->chatId   = $chatId;
        $this->chatList = $chatList;
    }

    public static function fromArray(array $array): AddChatToList
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
