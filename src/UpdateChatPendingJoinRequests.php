<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat pending join requests were changed
 */
class UpdateChatPendingJoinRequests extends Update
{
    public const TYPE_NAME = 'updateChatPendingJoinRequests';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The new data about pending join requests; may be null
     *
     * @var ChatJoinRequestsInfo|null
     */
    protected ?ChatJoinRequestsInfo $pendingJoinRequests;

    public function __construct(int $chatId, ?ChatJoinRequestsInfo $pendingJoinRequests)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->pendingJoinRequests = $pendingJoinRequests;
    }

    public static function fromArray(array $array): UpdateChatPendingJoinRequests
    {
        return new static(
            $array['chat_id'],
            (isset($array['pending_join_requests']) ? TdSchemaRegistry::fromArray($array['pending_join_requests']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'pending_join_requests' => (isset($this->pendingJoinRequests) ? $this->pendingJoinRequests : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPendingJoinRequests(): ?ChatJoinRequestsInfo
    {
        return $this->pendingJoinRequests;
    }
}
