<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a message thread
 */
class MessageThreadInfo extends TdObject
{
    public const TYPE_NAME = 'messageThreadInfo';

    /**
     * Identifier of the chat to which the message thread belongs
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message thread identifier, unique within the chat
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * Contains information about the message thread
     *
     * @var MessageReplyInfo
     */
    protected MessageReplyInfo $replyInfo;

    /**
     * The messages from which the thread starts. The messages are returned in a reverse chronological order (i.e., in order of decreasing message_id)
     *
     * @var Message[]
     */
    protected array $messages;

    /**
     * A draft of a message in the message thread; may be null
     *
     * @var DraftMessage|null
     */
    protected ?DraftMessage $draftMessage;

    public function __construct(
        int $chatId,
        int $messageThreadId,
        MessageReplyInfo $replyInfo,
        array $messages,
        ?DraftMessage $draftMessage
    ) {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->replyInfo = $replyInfo;
        $this->messages = $messages;
        $this->draftMessage = $draftMessage;
    }

    public static function fromArray(array $array): MessageThreadInfo
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['reply_info']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'reply_info' => $this->replyInfo->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->messages),
            'draft_message' => (isset($this->draftMessage) ? $this->draftMessage : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getReplyInfo(): MessageReplyInfo
    {
        return $this->replyInfo;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function getDraftMessage(): ?DraftMessage
    {
        return $this->draftMessage;
    }
}
