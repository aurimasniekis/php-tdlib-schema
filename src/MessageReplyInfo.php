<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about replies to a message
 */
class MessageReplyInfo extends TdObject
{
    public const TYPE_NAME = 'messageReplyInfo';

    /**
     * Number of times the message was directly or indirectly replied
     *
     * @var int
     */
    protected int $replyCount;

    /**
     * Identifiers of at most 3 recent repliers to the message; available in channels with a discussion supergroup. The users and chats are expected to be inaccessible: only their photo and name will be available
     *
     * @var MessageSender[]
     */
    protected array $recentReplierIds;

    /**
     * Identifier of the last read incoming reply to the message
     *
     * @var int
     */
    protected int $lastReadInboxMessageId;

    /**
     * Identifier of the last read outgoing reply to the message
     *
     * @var int
     */
    protected int $lastReadOutboxMessageId;

    /**
     * Identifier of the last reply to the message
     *
     * @var int
     */
    protected int $lastMessageId;

    public function __construct(
        int $replyCount,
        array $recentReplierIds,
        int $lastReadInboxMessageId,
        int $lastReadOutboxMessageId,
        int $lastMessageId
    ) {
        $this->replyCount = $replyCount;
        $this->recentReplierIds = $recentReplierIds;
        $this->lastReadInboxMessageId = $lastReadInboxMessageId;
        $this->lastReadOutboxMessageId = $lastReadOutboxMessageId;
        $this->lastMessageId = $lastMessageId;
    }

    public static function fromArray(array $array): MessageReplyInfo
    {
        return new static(
            $array['reply_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_replier_ids']),
            $array['last_read_inbox_message_id'],
            $array['last_read_outbox_message_id'],
            $array['last_message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'reply_count' => $this->replyCount,
            array_map(fn($x) => $x->typeSerialize(), $this->recentReplierIds),
            'last_read_inbox_message_id' => $this->lastReadInboxMessageId,
            'last_read_outbox_message_id' => $this->lastReadOutboxMessageId,
            'last_message_id' => $this->lastMessageId,
        ];
    }

    public function getReplyCount(): int
    {
        return $this->replyCount;
    }

    public function getRecentReplierIds(): array
    {
        return $this->recentReplierIds;
    }

    public function getLastReadInboxMessageId(): int
    {
        return $this->lastReadInboxMessageId;
    }

    public function getLastReadOutboxMessageId(): int
    {
        return $this->lastReadOutboxMessageId;
    }

    public function getLastMessageId(): int
    {
        return $this->lastMessageId;
    }
}
