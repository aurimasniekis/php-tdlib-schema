<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the draft message in a chat.
 */
class SetChatDraftMessage extends TdFunction
{
    public const TYPE_NAME = 'setChatDraftMessage';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New draft message; may be null.
     *
     * @var DraftMessage|null
     */
    protected ?DraftMessage $draftMessage;

    public function __construct(int $chatId, ?DraftMessage $draftMessage)
    {
        $this->chatId       = $chatId;
        $this->draftMessage = $draftMessage;
    }

    public static function fromArray(array $array): SetChatDraftMessage
    {
        return new static(
            $array['chat_id'],
            (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'draft_message' => (isset($this->draftMessage) ? $this->draftMessage : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDraftMessage(): ?DraftMessage
    {
        return $this->draftMessage;
    }
}
