<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The supergroup sticker set was changed.
 */
class ChatEventStickerSetChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventStickerSetChanged';

    /**
     * Previous identifier of the chat sticker set; 0 if none.
     *
     * @var string
     */
    protected string $oldStickerSetId;

    /**
     * New identifier of the chat sticker set; 0 if none.
     *
     * @var string
     */
    protected string $newStickerSetId;

    public function __construct(string $oldStickerSetId, string $newStickerSetId)
    {
        parent::__construct();

        $this->oldStickerSetId = $oldStickerSetId;
        $this->newStickerSetId = $newStickerSetId;
    }

    public static function fromArray(array $array): ChatEventStickerSetChanged
    {
        return new static(
            $array['old_sticker_set_id'],
            $array['new_sticker_set_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'old_sticker_set_id' => $this->oldStickerSetId,
            'new_sticker_set_id' => $this->newStickerSetId,
        ];
    }

    public function getOldStickerSetId(): string
    {
        return $this->oldStickerSetId;
    }

    public function getNewStickerSetId(): string
    {
        return $this->newStickerSetId;
    }
}
