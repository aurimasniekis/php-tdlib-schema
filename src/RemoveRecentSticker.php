<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Removes a sticker from the list of recently used stickers.
 */
class RemoveRecentSticker extends TdFunction
{
    public const TYPE_NAME = 'removeRecentSticker';

    /**
     * Pass true to remove the sticker from the list of stickers recently attached to photo or video files; pass false to remove the sticker from the list of recently sent stickers.
     *
     * @var bool
     */
    protected bool $isAttached;

    /**
     * Sticker file to delete.
     *
     * @var InputFile
     */
    protected InputFile $sticker;

    public function __construct(bool $isAttached, InputFile $sticker)
    {
        $this->isAttached = $isAttached;
        $this->sticker    = $sticker;
    }

    public static function fromArray(array $array): RemoveRecentSticker
    {
        return new static(
            $array['is_attached'],
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'is_attached' => $this->isAttached,
            'sticker'     => $this->sticker->typeSerialize(),
        ];
    }

    public function getIsAttached(): bool
    {
        return $this->isAttached;
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }
}
