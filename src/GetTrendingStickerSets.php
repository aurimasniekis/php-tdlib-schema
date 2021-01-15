<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of trending sticker sets.
 */
class GetTrendingStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getTrendingStickerSets';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetTrendingStickerSets
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
