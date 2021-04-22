<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the status of a chat member, needs appropriate privileges. This function is currently not suitable for adding new members to the chat and transferring chat ownership; instead, use addChatMember or transferChatOwnership. The chat member status will not be changed until it has been synchronized with the server.
 */
class SetChatMemberStatus extends TdFunction
{
    public const TYPE_NAME = 'setChatMemberStatus';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * User identifier.
     */
    protected int $userId;

    /**
     * The new status of the member in the chat.
     */
    protected ChatMemberStatus $status;

    public function __construct(int $chatId, int $userId, ChatMemberStatus $status)
    {
        $this->chatId = $chatId;
        $this->userId = $userId;
        $this->status = $status;
    }

    public static function fromArray(array $array): SetChatMemberStatus
    {
        return new static(
            $array['chat_id'],
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['status']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'user_id' => $this->userId,
            'status'  => $this->status->typeSerialize(),
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

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }
}
