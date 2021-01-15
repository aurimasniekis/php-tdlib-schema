<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The thumbnail is in static GIF format. It will be used only for some bot inline results.
 */
class ThumbnailFormatGif extends ThumbnailFormat
{
    public const TYPE_NAME = 'thumbnailFormatGif';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ThumbnailFormatGif
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
