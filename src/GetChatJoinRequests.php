<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns pending join requests in a chat
 */
class GetChatJoinRequests extends TdFunction
{
    public const TYPE_NAME = 'getChatJoinRequests';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Invite link for which to return join requests. If empty, all join requests will be returned. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links
     *
     * @var string
     */
    protected string $inviteLink;

    /**
     * A query to search for in the first names, last names and usernames of the users to return
     *
     * @var string
     */
    protected string $query;

    /**
     * A chat join request from which to return next requests; pass null to get results from the beginning
     *
     * @var ChatJoinRequest
     */
    protected ChatJoinRequest $offsetRequest;

    /**
     * The maximum number of requests to join the chat to return
     *
     * @var int
     */
    protected int $limit;

    public function __construct(
        int $chatId,
        string $inviteLink,
        string $query,
        ChatJoinRequest $offsetRequest,
        int $limit
    ) {
        $this->chatId = $chatId;
        $this->inviteLink = $inviteLink;
        $this->query = $query;
        $this->offsetRequest = $offsetRequest;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetChatJoinRequests
    {
        return new static(
            $array['chat_id'],
            $array['invite_link'],
            $array['query'],
            TdSchemaRegistry::fromArray($array['offset_request']),
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'invite_link' => $this->inviteLink,
            'query' => $this->query,
            'offset_request' => $this->offsetRequest->typeSerialize(),
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

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getOffsetRequest(): ChatJoinRequest
    {
        return $this->offsetRequest;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
