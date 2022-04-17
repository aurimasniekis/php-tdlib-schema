<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains animated stickers which must be used for dice animation rendering
 */
class DiceStickers extends TdObject
{
    public const TYPE_NAME = 'DiceStickers';

    public function __construct()
    {
    }

    public static function fromArray(array $array): DiceStickers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
