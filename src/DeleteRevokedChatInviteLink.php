<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes revoked chat invite links. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links
 */
class DeleteRevokedChatInviteLink extends TdFunction
{
    public const TYPE_NAME = 'deleteRevokedChatInviteLink';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Invite link to revoke
     *
     * @var string
     */
    protected string $inviteLink;

    public function __construct(int $chatId, string $inviteLink)
    {
        $this->chatId = $chatId;
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): DeleteRevokedChatInviteLink
    {
        return new static(
            $array['chat_id'],
            $array['invite_link'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'invite_link' => $this->inviteLink,
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
}
