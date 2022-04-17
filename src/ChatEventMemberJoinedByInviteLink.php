<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new member joined the chat via an invite link
 */
class ChatEventMemberJoinedByInviteLink extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMemberJoinedByInviteLink';

    /**
     * Invite link used to join the chat
     *
     * @var ChatInviteLink
     */
    protected ChatInviteLink $inviteLink;

    public function __construct(ChatInviteLink $inviteLink)
    {
        parent::__construct();

        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): ChatEventMemberJoinedByInviteLink
    {
        return new static(
            TdSchemaRegistry::fromArray($array['invite_link']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invite_link' => $this->inviteLink->typeSerialize(),
        ];
    }

    public function getInviteLink(): ChatInviteLink
    {
        return $this->inviteLink;
    }
}
