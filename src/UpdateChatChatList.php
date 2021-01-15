<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The list to which the chat belongs was changed. This update is guaranteed to be sent only when chat.order == 0 and the current or the new chat list is null.
 */
class UpdateChatChatList extends Update
{
    public const TYPE_NAME = 'updateChatChatList';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * The new chat's chat list; may be null.
     */
    protected ?ChatList $chatList;

    public function __construct(int $chatId, ?ChatList $chatList)
    {
        parent::__construct();

        $this->chatId   = $chatId;
        $this->chatList = $chatList;
    }

    public static function fromArray(array $array): UpdateChatChatList
    {
        return new static(
            $array['chat_id'],
            (isset($array['chat_list']) ? TdSchemaRegistry::fromArray($array['chat_list']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'chat_list' => (isset($this->chatList) ? $this->chatList : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getChatList(): ?ChatList
    {
        return $this->chatList;
    }
}
