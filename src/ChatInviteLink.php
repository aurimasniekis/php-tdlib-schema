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

    /**
     * Name of the link
     *
     * @var string
     */
    protected string $name;

    /**
     * User identifier of an administrator created the link
     *
     * @var int
     */
    protected int $creatorUserId;

    /**
     * Point in time (Unix timestamp) when the link was created
     *
     * @var int
     */
    protected int $date;

    /**
     * Point in time (Unix timestamp) when the link was last edited; 0 if never or unknown
     *
     * @var int
     */
    protected int $editDate;

    /**
     * Point in time (Unix timestamp) when the link will expire; 0 if never
     *
     * @var int
     */
    protected int $expirationDate;

    /**
     * The maximum number of members, which can join the chat using the link simultaneously; 0 if not limited. Always 0 if the link requires approval
     *
     * @var int
     */
    protected int $memberLimit;

    /**
     * Number of chat members, which joined the chat using the link
     *
     * @var int
     */
    protected int $memberCount;

    /**
     * Number of pending join requests created using this link
     *
     * @var int
     */
    protected int $pendingJoinRequestCount;

    /**
     * True, if the link only creates join request. If true, total number of joining members will be unlimited
     *
     * @var bool
     */
    protected bool $createsJoinRequest;

    /**
     * True, if the link is primary. Primary invite link can't have name, expiration date, or usage limit. There is exactly one primary invite link for each administrator with can_invite_users right at a given time
     *
     * @var bool
     */
    protected bool $isPrimary;

    /**
     * True, if the link was revoked
     *
     * @var bool
     */
    protected bool $isRevoked;

    public function __construct(
        string $inviteLink,
        string $name,
        int $creatorUserId,
        int $date,
        int $editDate,
        int $expirationDate,
        int $memberLimit,
        int $memberCount,
        int $pendingJoinRequestCount,
        bool $createsJoinRequest,
        bool $isPrimary,
        bool $isRevoked
    ) {
        $this->inviteLink = $inviteLink;
        $this->name = $name;
        $this->creatorUserId = $creatorUserId;
        $this->date = $date;
        $this->editDate = $editDate;
        $this->expirationDate = $expirationDate;
        $this->memberLimit = $memberLimit;
        $this->memberCount = $memberCount;
        $this->pendingJoinRequestCount = $pendingJoinRequestCount;
        $this->createsJoinRequest = $createsJoinRequest;
        $this->isPrimary = $isPrimary;
        $this->isRevoked = $isRevoked;
    }

    public static function fromArray(array $array): ChatInviteLink
    {
        return new static(
            $array['invite_link'],
            $array['name'],
            $array['creator_user_id'],
            $array['date'],
            $array['edit_date'],
            $array['expiration_date'],
            $array['member_limit'],
            $array['member_count'],
            $array['pending_join_request_count'],
            $array['creates_join_request'],
            $array['is_primary'],
            $array['is_revoked'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
            'name' => $this->name,
            'creator_user_id' => $this->creatorUserId,
            'date' => $this->date,
            'edit_date' => $this->editDate,
            'expiration_date' => $this->expirationDate,
            'member_limit' => $this->memberLimit,
            'member_count' => $this->memberCount,
            'pending_join_request_count' => $this->pendingJoinRequestCount,
            'creates_join_request' => $this->createsJoinRequest,
            'is_primary' => $this->isPrimary,
            'is_revoked' => $this->isRevoked,
        ];
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getName(): string
    {
        return $this->name;
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

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function getMemberLimit(): int
    {
        return $this->memberLimit;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getPendingJoinRequestCount(): int
    {
        return $this->pendingJoinRequestCount;
    }

    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
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
