<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about existing countries. Can be called before authorization
 */
class GetCountries extends TdFunction
{
    public const TYPE_NAME = 'getCountries';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetCountries
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
