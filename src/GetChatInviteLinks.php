<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns invite links for a chat created by specified administrator. Requires administrator privileges and can_invite_users right in the chat to get own links and owner privileges to get other links
 */
class GetChatInviteLinks extends TdFunction
{
    public const TYPE_NAME = 'getChatInviteLinks';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * User identifier of a chat administrator. Must be an identifier of the current user for non-owner
     *
     * @var int
     */
    protected int $creatorUserId;

    /**
     * Pass true if revoked links needs to be returned instead of active or expired
     *
     * @var bool
     */
    protected bool $isRevoked;

    /**
     * Creation date of an invite link starting after which to return invite links; use 0 to get results from the beginning
     *
     * @var int
     */
    protected int $offsetDate;

    /**
     * Invite link starting after which to return invite links; use empty string to get results from the beginning
     *
     * @var string
     */
    protected string $offsetInviteLink;

    /**
     * The maximum number of invite links to return; up to 100
     *
     * @var int
     */
    protected int $limit;

    public function __construct(
        int $chatId,
        int $creatorUserId,
        bool $isRevoked,
        int $offsetDate,
        string $offsetInviteLink,
        int $limit
    ) {
        $this->chatId = $chatId;
        $this->creatorUserId = $creatorUserId;
        $this->isRevoked = $isRevoked;
        $this->offsetDate = $offsetDate;
        $this->offsetInviteLink = $offsetInviteLink;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetChatInviteLinks
    {
        return new static(
            $array['chat_id'],
            $array['creator_user_id'],
            $array['is_revoked'],
            $array['offset_date'],
            $array['offset_invite_link'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'creator_user_id' => $this->creatorUserId,
            'is_revoked' => $this->isRevoked,
            'offset_date' => $this->offsetDate,
            'offset_invite_link' => $this->offsetInviteLink,
            'limit' => $this->limit,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getCreatorUserId(): int
    {
        return $this->creatorUserId;
    }

    public function getIsRevoked(): bool
    {
        return $this->isRevoked;
    }

    public function getOffsetDate(): int
    {
        return $this->offsetDate;
    }

    public function getOffsetInviteLink(): string
    {
        return $this->offsetInviteLink;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
