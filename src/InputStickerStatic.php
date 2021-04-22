<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A static sticker in PNG format, which will be converted to WEBP server-side.
 */
class InputStickerStatic extends InputSticker
{
    public const TYPE_NAME = 'inputStickerStatic';

    /**
     * PNG image with the sticker; must be up to 512 KB in size and fit in a 512x512 square.
     */
    protected InputFile $sticker;

    /**
     * Emojis corresponding to the sticker.
     */
    protected string $emojis;

    /**
     * For masks, position where the mask should be placed; may be null.
     */
    protected ?MaskPosition $maskPosition;

    public function __construct(InputFile $sticker, string $emojis, ?MaskPosition $maskPosition)
    {
        parent::__construct();

        $this->sticker      = $sticker;
        $this->emojis       = $emojis;
        $this->maskPosition = $maskPosition;
    }

    public static function fromArray(array $array): InputStickerStatic
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['emojis'],
            (isset($array['mask_position']) ? TdSchemaRegistry::fromArray($array['mask_position']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'sticker'       => $this->sticker->typeSerialize(),
            'emojis'        => $this->emojis,
            'mask_position' => (isset($this->maskPosition) ? $this->maskPosition : null),
        ];
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function getEmojis(): string
    {
        return $this->emojis;
    }

    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }
}
