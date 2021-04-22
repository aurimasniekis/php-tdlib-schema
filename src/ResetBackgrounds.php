<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Resets list of installed backgrounds to its default value.
 */
class ResetBackgrounds extends TdFunction
{
    public const TYPE_NAME = 'resetBackgrounds';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResetBackgrounds
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
