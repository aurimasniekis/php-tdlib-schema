<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat invite link was edited
 */
class ChatEventInviteLinkEdited extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventInviteLinkEdited';

    /**
     * Previous information about the invite link
     *
     * @var ChatInviteLink
     */
    protected ChatInviteLink $oldInviteLink;

    /**
     * New information about the invite link
     *
     * @var ChatInviteLink
     */
    protected ChatInviteLink $newInviteLink;

    public function __construct(ChatInviteLink $oldInviteLink, ChatInviteLink $newInviteLink)
    {
        parent::__construct();

        $this->oldInviteLink = $oldInviteLink;
        $this->newInviteLink = $newInviteLink;
    }

    public static function fromArray(array $array): ChatEventInviteLinkEdited
    {
        return new static(
            TdSchemaRegistry::fromArray($array['old_invite_link']),
            TdSchemaRegistry::fromArray($array['new_invite_link']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_invite_link' => $this->oldInviteLink->typeSerialize(),
            'new_invite_link' => $this->newInviteLink->typeSerialize(),
        ];
    }

    public function getOldInviteLink(): ChatInviteLink
    {
        return $this->oldInviteLink;
    }

    public function getNewInviteLink(): ChatInviteLink
    {
        return $this->newInviteLink;
    }
}
