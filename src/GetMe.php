<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the current user.
 */
class GetMe extends TdFunction
{
    public const TYPE_NAME = 'getMe';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetMe
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
