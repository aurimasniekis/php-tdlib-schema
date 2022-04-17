<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The thumbnail is in TGS format. It will be used only for animated sticker sets
 */
class ThumbnailFormatTgs extends ThumbnailFormat
{
    public const TYPE_NAME = 'thumbnailFormatTgs';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ThumbnailFormatTgs
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
