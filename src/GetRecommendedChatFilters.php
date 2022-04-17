<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns recommended chat filters for the current user
 */
class GetRecommendedChatFilters extends TdFunction
{
    public const TYPE_NAME = 'getRecommendedChatFilters';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetRecommendedChatFilters
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
