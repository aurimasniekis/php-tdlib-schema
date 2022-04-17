<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Creates a new invite link for a chat. Available for basic groups, supergroups, and channels. Requires administrator privileges and can_invite_users right in the chat
 */
class CreateChatInviteLink extends TdFunction
{
    public const TYPE_NAME = 'createChatInviteLink';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Invite link name; 0-32 characters
     *
     * @var string
     */
    protected string $name;

    /**
     * Point in time (Unix timestamp) when the link will expire; pass 0 if never
     *
     * @var int
     */
    protected int $expirationDate;

    /**
     * The maximum number of chat members that can join the chat via the link simultaneously; 0-99999; pass 0 if not limited
     *
     * @var int
     */
    protected int $memberLimit;

    /**
     * True, if the link only creates join request. If true, member_limit must not be specified
     *
     * @var bool
     */
    protected bool $createsJoinRequest;

    public function __construct(
        int $chatId,
        string $name,
        int $expirationDate,
        int $memberLimit,
        bool $createsJoinRequest
    ) {
        $this->chatId = $chatId;
        $this->name = $name;
        $this->expirationDate = $expirationDate;
        $this->memberLimit = $memberLimit;
        $this->createsJoinRequest = $createsJoinRequest;
    }

    public static function fromArray(array $array): CreateChatInviteLink
    {
        return new static(
            $array['chat_id'],
            $array['name'],
            $array['expiration_date'],
            $array['member_limit'],
            $array['creates_join_request'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'name' => $this->name,
            'expiration_date' => $this->expirationDate,
            'member_limit' => $this->memberLimit,
            'creates_join_request' => $this->createsJoinRequest,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function getMemberLimit(): int
    {
        return $this->memberLimit;
    }

    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }
}
