<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A regular animated sticker
 */
class DiceStickersRegular extends DiceStickers
{
    public const TYPE_NAME = 'diceStickersRegular';

    /**
     * The animated sticker with the dice animation
     *
     * @var Sticker
     */
    protected Sticker $sticker;

    public function __construct(Sticker $sticker)
    {
        parent::__construct();

        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): DiceStickersRegular
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

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }
}
