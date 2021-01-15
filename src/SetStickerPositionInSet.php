<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the position of a sticker in the set to which it belongs; for bots only. The sticker set must have been created by the bot.
 */
class SetStickerPositionInSet extends TdFunction
{
    public const TYPE_NAME = 'setStickerPositionInSet';

    /**
     * Sticker.
     *
     * @var InputFile
     */
    protected InputFile $sticker;

    /**
     * New position of the sticker in the set, zero-based.
     *
     * @var int
     */
    protected int $position;

    public function __construct(InputFile $sticker, int $position)
    {
        $this->sticker  = $sticker;
        $this->position = $position;
    }

    public static function fromArray(array $array): SetStickerPositionInSet
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['position'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'sticker'  => $this->sticker->typeSerialize(),
            'position' => $this->position,
        ];
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function getPosition(): int
    {
        return $this->position;
    }
}
