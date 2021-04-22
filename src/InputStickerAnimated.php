<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An animated sticker in TGS format.
 */
class InputStickerAnimated extends InputSticker
{
    public const TYPE_NAME = 'inputStickerAnimated';

    /**
     * File with the animated sticker. Only local or uploaded within a week files are supported. See https://core.telegram.org/animated_stickers#technical-requirements for technical requirements.
     */
    protected InputFile $sticker;

    /**
     * Emojis corresponding to the sticker.
     */
    protected string $emojis;

    public function __construct(InputFile $sticker, string $emojis)
    {
        parent::__construct();

        $this->sticker = $sticker;
        $this->emojis  = $emojis;
    }

    public static function fromArray(array $array): InputStickerAnimated
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['emojis'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
            'emojis'  => $this->emojis,
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
}
