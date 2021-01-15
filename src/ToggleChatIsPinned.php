<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the pinned state of a chat. There can be up to GetOption("pinned_chat_count_max")/GetOption("pinned_archived_chat_count_max") pinned non-secret chats and the same number of secret chats in the main/arhive chat list.
 */
class ToggleChatIsPinned extends TdFunction
{
    public const TYPE_NAME = 'toggleChatIsPinned';

    /**
     * Chat list in which to change the pinned state of the chat.
     */
    protected ChatList $chatList;

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * True, if the chat is pinned.
     */
    protected bool $isPinned;

    public function __construct(ChatList $chatList, int $chatId, bool $isPinned)
    {
        $this->chatList = $chatList;
        $this->chatId   = $chatId;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): ToggleChatIsPinned
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['chat_id'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_list' => $this->chatList->typeSerialize(),
            'chat_id'   => $this->chatId,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
