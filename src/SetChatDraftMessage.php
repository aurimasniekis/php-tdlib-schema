<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the draft message in a chat
 */
class SetChatDraftMessage extends TdFunction
{
    public const TYPE_NAME = 'setChatDraftMessage';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * If not 0, a message thread identifier in which the draft was changed
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * New draft message; pass null to remove the draft
     *
     * @var DraftMessage
     */
    protected DraftMessage $draftMessage;

    public function __construct(int $chatId, int $messageThreadId, DraftMessage $draftMessage)
    {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->draftMessage = $draftMessage;
    }

    public static function fromArray(array $array): SetChatDraftMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['draft_message']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'draft_message' => $this->draftMessage->typeSerialize(),
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

    public function getDraftMessage(): DraftMessage
    {
        return $this->draftMessage;
    }
}
