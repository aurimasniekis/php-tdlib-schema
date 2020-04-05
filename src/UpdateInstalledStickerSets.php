<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The list of installed sticker sets was updated.
 */
class UpdateInstalledStickerSets extends Update
{
    public const TYPE_NAME = 'updateInstalledStickerSets';

    /**
     * True, if the list of installed mask sticker sets was updated.
     *
     * @var bool
     */
    protected bool $isMasks;

    /**
     * The new list of installed ordinary sticker sets.
     *
     * @var int[]
     */
    protected array $stickerSetIds;

    public function __construct(bool $isMasks, array $stickerSetIds)
    {
        parent::__construct();

        $this->isMasks       = $isMasks;
        $this->stickerSetIds = $stickerSetIds;
    }

    public static function fromArray(array $array): UpdateInstalledStickerSets
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
