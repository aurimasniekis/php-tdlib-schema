<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns users which can be mentioned in the chat
 */
class ChatMembersFilterMention extends ChatMembersFilter
{
    public const TYPE_NAME = 'chatMembersFilterMention';

    /**
     * If non-zero, the identifier of the current message thread
     *
     * @var int
     */
    protected int $messageThreadId;

    public function __construct(int $messageThreadId)
    {
        parent::__construct();

        $this->messageThreadId = $messageThreadId;
    }

    public static function fromArray(array $array): ChatMembersFilterMention
    {
        return new static(
            $array['message_thread_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_thread_id' => $this->messageThreadId,
        ];
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }
}
