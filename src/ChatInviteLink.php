<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a chat invite link
 */
class ChatInviteLink extends TdObject
{
    public const TYPE_NAME = 'chatInviteLink';

    /**
     * Chat invite link
     *
     * @var string
     */
    protected string $inviteLink;

    public function __construct(string $inviteLink)
    {
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): ChatInviteLink
    {
        return new static(
            $array['invite_link'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
        ];
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }
}
