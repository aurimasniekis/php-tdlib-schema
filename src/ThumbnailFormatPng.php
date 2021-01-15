<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The thumbnail is in PNG format. It will be used only for background patterns.
 */
class ThumbnailFormatPng extends ThumbnailFormat
{
    public const TYPE_NAME = 'thumbnailFormatPng';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ThumbnailFormatPng
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
