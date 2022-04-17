<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents result of checking whether a name can be used for a new sticker set
 */
class CheckStickerSetNameResult extends TdObject
{
    public const TYPE_NAME = 'CheckStickerSetNameResult';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CheckStickerSetNameResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
