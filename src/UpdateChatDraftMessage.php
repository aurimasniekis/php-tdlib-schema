<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat draft has changed. Be aware that the update may come in the currently opened chat but with old content of the draft. If the user has changed the content of the draft, this update shouldn't be applied.
 */
class UpdateChatDraftMessage extends Update
{
    public const TYPE_NAME = 'updateChatDraftMessage';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The new draft message; may be null.
     *
     * @var DraftMessage|null
     */
    protected ?DraftMessage $draftMessage;

    /**
     * New value of the chat order.
     *
     * @var int
     */
    protected int $order;

    public function __construct(int $chatId, ?DraftMessage $draftMessage, int $order)
    {
        parent::__construct();

        $this->chatId       = $chatId;
        $this->draftMessage = $draftMessage;
        $this->order        = $order;
    }

    public static function fromArray(array $array): UpdateChatDraftMessage
    {
        return new static(
            $array['chat_id'],
            (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
            $array['order'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'draft_message' => (isset($this->draftMessage) ? $this->draftMessage : null),
            'order'         => $this->order,
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

    public function getOrder(): int
    {
        return $this->order;
    }
}
