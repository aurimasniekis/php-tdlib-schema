<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Reports a chat to the Telegram moderators. A chat can be reported only from the chat action bar, or if this is a private chats with a bot, a private chat with a user sharing their location, a supergroup, or a channel, since other chats can't be checked by moderators
 */
class ReportChat extends TdFunction
{
    public const TYPE_NAME = 'reportChat';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The reason for reporting the chat
     *
     * @var ChatReportReason
     */
    protected ChatReportReason $reason;

    /**
     * Identifiers of reported messages, if any
     *
     * @var int[]
     */
    protected array $messageIds;

    public function __construct(int $chatId, ChatReportReason $reason, array $messageIds)
    {
        $this->chatId = $chatId;
        $this->reason = $reason;
        $this->messageIds = $messageIds;
    }

    public static function fromArray(array $array): ReportChat
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['reason']),
            $array['message_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'reason' => $this->reason->typeSerialize(),
            'message_ids' => $this->messageIds,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getReason(): ChatReportReason
    {
        return $this->reason;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }
}
