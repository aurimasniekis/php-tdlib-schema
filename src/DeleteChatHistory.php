<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes all messages in the chat. Use Chat.can_be_deleted_only_for_self and Chat.can_be_deleted_for_all_users fields to find whether and how the method can be applied to the chat.
 */
class DeleteChatHistory extends TdFunction
{
    public const TYPE_NAME = 'deleteChatHistory';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * Pass true if the chat should be removed from the chat list.
     */
    protected bool $removeFromChatList;

    /**
     * Pass true to try to delete chat history for all users.
     */
    protected bool $revoke;

    public function __construct(int $chatId, bool $removeFromChatList, bool $revoke)
    {
        $this->chatId             = $chatId;
        $this->removeFromChatList = $removeFromChatList;
        $this->revoke             = $revoke;
    }

    public static function fromArray(array $array): DeleteChatHistory
    {
        return new static(
            $array['chat_id'],
            $array['remove_from_chat_list'],
            $array['revoke'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'remove_from_chat_list' => $this->removeFromChatList,
            'revoke'                => $this->revoke,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getRemoveFromChatList(): bool
    {
        return $this->removeFromChatList;
    }

    public function getRevoke(): bool
    {
        return $this->revoke;
    }
}
