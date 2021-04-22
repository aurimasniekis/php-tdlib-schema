<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Uses an invite link to add the current user to the chat if possible.
 */
class JoinChatByInviteLink extends TdFunction
{
    public const TYPE_NAME = 'joinChatByInviteLink';

    /**
     * Invite link to import; must have URL "t.me", "telegram.me", or "telegram.dog" and query beginning with "/joinchat/" or "/+".
     */
    protected string $inviteLink;

    public function __construct(string $inviteLink)
    {
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): JoinChatByInviteLink
    {
        return new static(
            $array['invite_link'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
        ];
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }
}
