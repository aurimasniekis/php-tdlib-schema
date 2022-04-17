<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat invite link was revoked
 */
class ChatEventInviteLinkRevoked extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventInviteLinkRevoked';

    /**
     * The invite link
     *
     * @var ChatInviteLink
     */
    protected ChatInviteLink $inviteLink;

    public function __construct(ChatInviteLink $inviteLink)
    {
        parent::__construct();

        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): ChatEventInviteLinkRevoked
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
