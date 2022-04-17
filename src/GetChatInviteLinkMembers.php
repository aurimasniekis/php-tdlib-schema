<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns chat members joined a chat via an invite link. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links
 */
class GetChatInviteLinkMembers extends TdFunction
{
    public const TYPE_NAME = 'getChatInviteLinkMembers';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Invite link for which to return chat members
     *
     * @var string
     */
    protected string $inviteLink;

    /**
     * A chat member from which to return next chat members; pass null to get results from the beginning
     *
     * @var ChatInviteLinkMember
     */
    protected ChatInviteLinkMember $offsetMember;

    /**
     * The maximum number of chat members to return; up to 100
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $chatId, string $inviteLink, ChatInviteLinkMember $offsetMember, int $limit)
    {
        $this->chatId = $chatId;
        $this->inviteLink = $inviteLink;
        $this->offsetMember = $offsetMember;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetChatInviteLinkMembers
    {
        return new static(
            $array['chat_id'],
            $array['invite_link'],
            TdSchemaRegistry::fromArray($array['offset_member']),
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'invite_link' => $this->inviteLink,
            'offset_member' => $this->offsetMember->typeSerialize(),
            'limit' => $this->limit,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getOffsetMember(): ChatInviteLinkMember
    {
        return $this->offsetMember;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
