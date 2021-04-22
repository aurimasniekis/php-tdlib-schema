<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of archived sticker sets
 */
class GetArchivedStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getArchivedStickerSets';

    /**
     * Pass true to return mask stickers sets; pass false to return ordinary sticker sets
     *
     * @var bool
     */
    protected bool $isMasks;

    /**
     * Identifier of the sticker set from which to return the result
     *
     * @var string
     */
    protected string $offsetStickerSetId;

    /**
     * The maximum number of sticker sets to return
     *
     * @var int
     */
    protected int $limit;

    public function __construct(bool $isMasks, string $offsetStickerSetId, int $limit)
    {
        $this->isMasks = $isMasks;
        $this->offsetStickerSetId = $offsetStickerSetId;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetArchivedStickerSets
    {
        return new static(
            $array['is_masks'],
            $array['offset_sticker_set_id'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_masks' => $this->isMasks,
            'offset_sticker_set_id' => $this->offsetStickerSetId,
            'limit' => $this->limit,
        ];
    }

    public function getIsMasks(): bool
    {
        return $this->isMasks;
    }

    public function getOffsetStickerSetId(): string
    {
        return $this->offsetStickerSetId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
