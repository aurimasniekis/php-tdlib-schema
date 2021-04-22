<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns application config, provided by the server. Can be called before authorization.
 */
class GetApplicationConfig extends TdFunction
{
    public const TYPE_NAME = 'getApplicationConfig';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetApplicationConfig
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
