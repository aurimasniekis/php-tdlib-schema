<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the status of a chat member, needs appropriate privileges. This function is currently not suitable for transferring chat ownership; use transferChatOwnership instead. Use addChatMember or banChatMember if some additional parameters needs to be passed
 */
class SetChatMemberStatus extends TdFunction
{
    public const TYPE_NAME = 'setChatMemberStatus';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Member identifier. Chats can be only banned and unbanned in supergroups and channels
     *
     * @var MessageSender
     */
    protected MessageSender $memberId;

    /**
     * The new status of the member in the chat
     *
     * @var ChatMemberStatus
     */
    protected ChatMemberStatus $status;

    public function __construct(int $chatId, MessageSender $memberId, ChatMemberStatus $status)
    {
        $this->chatId = $chatId;
        $this->memberId = $memberId;
        $this->status = $status;
    }

    public static function fromArray(array $array): SetChatMemberStatus
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['member_id']),
            TdSchemaRegistry::fromArray($array['status']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'member_id' => $this->memberId->typeSerialize(),
            'status' => $this->status->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMemberId(): MessageSender
    {
        return $this->memberId;
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }
}
