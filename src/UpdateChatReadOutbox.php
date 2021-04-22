<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Outgoing messages were read.
 */
class UpdateChatReadOutbox extends Update
{
    public const TYPE_NAME = 'updateChatReadOutbox';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * Identifier of last read outgoing message.
     */
    protected int $lastReadOutboxMessageId;

    public function __construct(int $chatId, int $lastReadOutboxMessageId)
    {
        parent::__construct();

        $this->chatId                  = $chatId;
        $this->lastReadOutboxMessageId = $lastReadOutboxMessageId;
    }

    public static function fromArray(array $array): UpdateChatReadOutbox
    {
        return new static(
            $array['chat_id'],
            $array['last_read_outbox_message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'chat_id'                     => $this->chatId,
            'last_read_outbox_message_id' => $this->lastReadOutboxMessageId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLastReadOutboxMessageId(): int
    {
        return $this->lastReadOutboxMessageId;
    }
}
