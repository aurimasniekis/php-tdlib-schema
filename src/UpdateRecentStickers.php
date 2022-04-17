<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The list of recently used stickers was updated
 */
class UpdateRecentStickers extends Update
{
    public const TYPE_NAME = 'updateRecentStickers';

    /**
     * True, if the list of stickers attached to photo or video files was updated, otherwise the list of sent stickers is updated
     *
     * @var bool
     */
    protected bool $isAttached;

    /**
     * The new list of file identifiers of recently used stickers
     *
     * @var int[]
     */
    protected array $stickerIds;

    public function __construct(bool $isAttached, array $stickerIds)
    {
        parent::__construct();

        $this->isAttached = $isAttached;
        $this->stickerIds = $stickerIds;
    }

    public static function fromArray(array $array): UpdateRecentStickers
    {
        return new static(
            $array['is_attached'],
            $array['sticker_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_attached' => $this->isAttached,
            'sticker_ids' => $this->stickerIds,
        ];
    }

    public function getIsAttached(): bool
    {
        return $this->isAttached;
    }

    public function getStickerIds(): array
    {
        return $this->stickerIds;
    }
}
