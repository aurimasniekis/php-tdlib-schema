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
     */
    protected int $chatId;

    /**
     * The new draft message; may be null.
     */
    protected ?DraftMessage $draftMessage;

    /**
     * The new chat positions in the chat lists.
     *
     * @var ChatPosition[]
     */
    protected array $positions;

    public function __construct(int $chatId, ?DraftMessage $draftMessage, array $positions)
    {
        parent::__construct();

        $this->chatId       = $chatId;
        $this->draftMessage = $draftMessage;
        $this->positions    = $positions;
    }

    public static function fromArray(array $array): UpdateChatDraftMessage
    {
        return new static(
            $array['chat_id'],
            (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['positions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'draft_message'   => (isset($this->draftMessage) ? $this->draftMessage : null),
            array_map(fn ($x) => $x->typeSerialize(), $this->positions),
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

    public function getPositions(): array
    {
        return $this->positions;
    }
}
