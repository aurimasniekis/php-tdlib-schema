<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a chat member joined a chat via an invite link
 */
class ChatInviteLinkMember extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinkMember';

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    /**
     * Point in time (Unix timestamp) when the user joined the chat
     *
     * @var int
     */
    protected int $joinedChatDate;

    /**
     * User identifier of the chat administrator, approved user join request
     *
     * @var int
     */
    protected int $approverUserId;

    public function __construct(int $userId, int $joinedChatDate, int $approverUserId)
    {
        $this->userId = $userId;
        $this->joinedChatDate = $joinedChatDate;
        $this->approverUserId = $approverUserId;
    }

    public static function fromArray(array $array): ChatInviteLinkMember
    {
        return new static(
            $array['user_id'],
            $array['joined_chat_date'],
            $array['approver_user_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'joined_chat_date' => $this->joinedChatDate,
            'approver_user_id' => $this->approverUserId,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getJoinedChatDate(): int
    {
        return $this->joinedChatDate;
    }

    public function getApproverUserId(): int
    {
        return $this->approverUserId;
    }
}
