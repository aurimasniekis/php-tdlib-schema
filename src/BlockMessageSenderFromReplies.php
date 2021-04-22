<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Blocks an original sender of a message in the Replies chat.
 */
class BlockMessageSenderFromReplies extends TdFunction
{
    public const TYPE_NAME = 'blockMessageSenderFromReplies';

    /**
     * The identifier of an incoming message in the Replies chat.
     */
    protected int $messageId;

    /**
     * Pass true if the message must be deleted.
     */
    protected bool $deleteMessage;

    /**
     * Pass true if all messages from the same sender must be deleted.
     */
    protected bool $deleteAllMessages;

    /**
     * Pass true if the sender must be reported to the Telegram moderators.
     */
    protected bool $reportSpam;

    public function __construct(int $messageId, bool $deleteMessage, bool $deleteAllMessages, bool $reportSpam)
    {
        $this->messageId         = $messageId;
        $this->deleteMessage     = $deleteMessage;
        $this->deleteAllMessages = $deleteAllMessages;
        $this->reportSpam        = $reportSpam;
    }

    public static function fromArray(array $array): BlockMessageSenderFromReplies
    {
        return new static(
            $array['message_id'],
            $array['delete_message'],
            $array['delete_all_messages'],
            $array['report_spam'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'message_id'          => $this->messageId,
            'delete_message'      => $this->deleteMessage,
            'delete_all_messages' => $this->deleteAllMessages,
            'report_spam'         => $this->reportSpam,
        ];
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getDeleteMessage(): bool
    {
        return $this->deleteMessage;
    }

    public function getDeleteAllMessages(): bool
    {
        return $this->deleteAllMessages;
    }

    public function getReportSpam(): bool
    {
        return $this->reportSpam;
    }
}
