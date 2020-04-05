<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a sticker that needs to be added to a sticker set.
 */
class InputSticker extends TdObject
{
    public const TYPE_NAME = 'InputSticker';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InputSticker
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
