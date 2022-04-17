<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the type of a background
 */
class BackgroundType extends TdObject
{
    public const TYPE_NAME = 'BackgroundType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): BackgroundType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
