<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Uses current user IP to found their country. Returns two-letter ISO 3166-1 alpha-2 country code. Can be called before authorization.
 */
class GetCountryCode extends TdFunction
{
    public const TYPE_NAME = 'getCountryCode';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetCountryCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
