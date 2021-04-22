<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A sticker set has changed.
 */
class UpdateStickerSet extends Update
{
    public const TYPE_NAME = 'updateStickerSet';

    /**
     * The sticker set.
     */
    protected StickerSet $stickerSet;

    public function __construct(StickerSet $stickerSet)
    {
        parent::__construct();

        $this->stickerSet = $stickerSet;
    }

    public static function fromArray(array $array): UpdateStickerSet
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_set']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'sticker_set' => $this->stickerSet->typeSerialize(),
        ];
    }

    public function getStickerSet(): StickerSet
    {
        return $this->stickerSet;
    }
}
