<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Removes a sticker from the set to which it belongs; for bots only. The sticker set must have been created by the bot
 */
class RemoveStickerFromSet extends TdFunction
{
    public const TYPE_NAME = 'removeStickerFromSet';

    /**
     * Sticker
     *
     * @var InputFile
     */
    protected InputFile $sticker;

    public function __construct(InputFile $sticker)
    {
        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): RemoveStickerFromSet
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }
}
