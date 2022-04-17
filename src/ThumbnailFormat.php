<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes format of the thumbnail
 */
class ThumbnailFormat extends TdObject
{
    public const TYPE_NAME = 'ThumbnailFormat';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ThumbnailFormat
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
