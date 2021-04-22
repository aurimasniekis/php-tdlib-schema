<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The list of favorite stickers was updated.
 */
class UpdateFavoriteStickers extends Update
{
    public const TYPE_NAME = 'updateFavoriteStickers';

    /**
     * The new list of file identifiers of favorite stickers.
     *
     * @var int[]
     */
    protected array $stickerIds;

    public function __construct(array $stickerIds)
    {
        parent::__construct();

        $this->stickerIds = $stickerIds;
    }

    public static function fromArray(array $array): UpdateFavoriteStickers
    {
        return new static(
            $array['sticker_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'sticker_ids' => $this->stickerIds,
        ];
    }

    public function getStickerIds(): array
    {
        return $this->stickerIds;
    }
}
