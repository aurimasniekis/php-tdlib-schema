<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns saved animations
 */
class GetSavedAnimations extends TdFunction
{
    public const TYPE_NAME = 'getSavedAnimations';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetSavedAnimations
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
