<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns list of proxies that are currently set up. Can be called before authorization
 */
class GetProxies extends TdFunction
{
    public const TYPE_NAME = 'getProxies';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetProxies
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
