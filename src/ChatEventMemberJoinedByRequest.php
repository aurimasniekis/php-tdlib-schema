<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new member was accepted to the chat by an administrator
 */
class ChatEventMemberJoinedByRequest extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMemberJoinedByRequest';

    /**
     * User identifier of the chat administrator, approved user join request
     *
     * @var int
     */
    protected int $approverUserId;

    /**
     * Invite link used to join the chat; may be null
     *
     * @var ChatInviteLink|null
     */
    protected ?ChatInviteLink $inviteLink;

    public function __construct(int $approverUserId, ?ChatInviteLink $inviteLink)
    {
        parent::__construct();

        $this->approverUserId = $approverUserId;
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): ChatEventMemberJoinedByRequest
    {
        return new static(
            $array['approver_user_id'],
            (isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'approver_user_id' => $this->approverUserId,
            'invite_link' => (isset($this->inviteLink) ? $this->inviteLink : null),
        ];
    }

    public function getApproverUserId(): int
    {
        return $this->approverUserId;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }
}
