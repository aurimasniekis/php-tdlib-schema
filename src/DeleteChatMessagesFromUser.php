<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes all messages sent by the specified user to a chat. Supported only for supergroups; requires can_delete_messages administrator privileges.
 */
class DeleteChatMessagesFromUser extends TdFunction
{
    public const TYPE_NAME = 'deleteChatMessagesFromUser';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * User identifier.
     */
    protected int $userId;

    public function __construct(int $chatId, int $userId)
    {
        $this->chatId = $chatId;
        $this->userId = $userId;
    }

    public static function fromArray(array $array): DeleteChatMessagesFromUser
    {
        return new static(
            $array['chat_id'],
            $array['user_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'user_id' => $this->userId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}
