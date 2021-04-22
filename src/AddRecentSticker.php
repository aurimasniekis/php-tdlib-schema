<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Manually adds a new sticker to the list of recently used stickers. The new sticker is added to the top of the list. If the sticker was already in the list, it is removed from the list first. Only stickers belonging to a sticker set can be added to this list
 */
class AddRecentSticker extends TdFunction
{
    public const TYPE_NAME = 'addRecentSticker';

    /**
     * Pass true to add the sticker to the list of stickers recently attached to photo or video files; pass false to add the sticker to the list of recently sent stickers
     *
     * @var bool
     */
    protected bool $isAttached;

    /**
     * Sticker file to add
     *
     * @var InputFile
     */
    protected InputFile $sticker;

    public function __construct(bool $isAttached, InputFile $sticker)
    {
        $this->isAttached = $isAttached;
        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): AddRecentSticker
    {
        return new static(
            $array['is_attached'],
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_attached' => $this->isAttached,
            'sticker' => $this->sticker->typeSerialize(),
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
