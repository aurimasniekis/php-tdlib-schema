<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a chat invite link.
 */
class ChatInviteLink extends TdObject
{
    public const TYPE_NAME = 'chatInviteLink';

    /**
     * Chat invite link.
     */
    protected string $inviteLink;

    /**
     * User identifier of an administrator created the link.
     */
    protected int $creatorUserId;

    /**
     * Point in time (Unix timestamp) when the link was created.
     */
    protected int $date;

    /**
     * Point in time (Unix timestamp) when the link was last edited; 0 if never or unknown.
     */
    protected int $editDate;

    /**
     * Point in time (Unix timestamp) when the link will expire; 0 if never.
     */
    protected int $expireDate;

    /**
     * Maximum number of members, which can join the chat using the link simultaneously; 0 if not limited.
     */
    protected int $memberLimit;

    /**
     * Number of chat members, which joined the chat using the link.
     */
    protected int $memberCount;

    /**
     * True, if the link is primary. Primary invite link can't have expire date or usage limit. There is exactly one primary invite link for each administrator with can_invite_users right at a given time.
     */
    protected bool $isPrimary;

    /**
     * True, if the link was revoked.
     */
    protected bool $isRevoked;

    public function __construct(
        string $inviteLink,
        int $creatorUserId,
        int $date,
        int $editDate,
        int $expireDate,
        int $memberLimit,
        int $memberCount,
        bool $isPrimary,
        bool $isRevoked
    ) {
        $this->inviteLink    = $inviteLink;
        $this->creatorUserId = $creatorUserId;
        $this->date          = $date;
        $this->editDate      = $editDate;
        $this->expireDate    = $expireDate;
        $this->memberLimit   = $memberLimit;
        $this->memberCount   = $memberCount;
        $this->isPrimary     = $isPrimary;
        $this->isRevoked     = $isRevoked;
    }

    public static function fromArray(array $array): ChatInviteLink
    {
        return new static(
            $array['invite_link'],
            $array['creator_user_id'],
            $array['date'],
            $array['edit_date'],
            $array['expire_date'],
            $array['member_limit'],
            $array['member_count'],
            $array['is_primary'],
            $array['is_revoked'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'invite_link'     => $this->inviteLink,
            'creator_user_id' => $this->creatorUserId,
            'date'            => $this->date,
            'edit_date'       => $this->editDate,
            'expire_date'     => $this->expireDate,
            'member_limit'    => $this->memberLimit,
            'member_count'    => $this->memberCount,
            'is_primary'      => $this->isPrimary,
            'is_revoked'      => $this->isRevoked,
        ];
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getCreatorUserId(): int
    {
        return $this->creatorUserId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getEditDate(): int
    {
        return $this->editDate;
    }

    public function getExpireDate(): int
    {
        return $this->expireDate;
    }

    public function getMemberLimit(): int
    {
        return $this->memberLimit;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getIsPrimary(): bool
    {
        return $this->isPrimary;
    }

    public function getIsRevoked(): bool
    {
        return $this->isRevoked;
    }
}
