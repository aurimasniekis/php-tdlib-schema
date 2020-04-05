<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns favorite stickers.
 */
class GetFavoriteStickers extends TdFunction
{
    public const TYPE_NAME = 'getFavoriteStickers';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetFavoriteStickers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
