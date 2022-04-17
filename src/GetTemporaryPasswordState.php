<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about the current temporary password
 */
class GetTemporaryPasswordState extends TdFunction
{
    public const TYPE_NAME = 'getTemporaryPasswordState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetTemporaryPasswordState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
