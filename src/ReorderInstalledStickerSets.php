<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the order of installed sticker sets.
 */
class ReorderInstalledStickerSets extends TdFunction
{
    public const TYPE_NAME = 'reorderInstalledStickerSets';

    /**
     * Pass true to change the order of mask sticker sets; pass false to change the order of ordinary sticker sets.
     */
    protected bool $isMasks;

    /**
     * Identifiers of installed sticker sets in the new correct order.
     *
     * @var string[]
     */
    protected array $stickerSetIds;

    public function __construct(bool $isMasks, array $stickerSetIds)
    {
        $this->isMasks       = $isMasks;
        $this->stickerSetIds = $stickerSetIds;
    }

    public static function fromArray(array $array): ReorderInstalledStickerSets
    {
        return new static(
            $array['is_masks'],
            $array['sticker_set_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'is_masks'        => $this->isMasks,
            'sticker_set_ids' => $this->stickerSetIds,
        ];
    }

    public function getIsMasks(): bool
    {
        return $this->isMasks;
    }

    public function getStickerSetIds(): array
    {
        return $this->stickerSetIds;
    }
}
