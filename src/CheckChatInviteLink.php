<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks the validity of an invite link for a chat and returns information about the corresponding chat.
 */
class CheckChatInviteLink extends TdFunction
{
    public const TYPE_NAME = 'checkChatInviteLink';

    /**
     * Invite link to be checked; must have URL "t.me", "telegram.me", or "telegram.dog" and query beginning with "/joinchat/" or "/+".
     */
    protected string $inviteLink;

    public function __construct(string $inviteLink)
    {
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): CheckChatInviteLink
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
