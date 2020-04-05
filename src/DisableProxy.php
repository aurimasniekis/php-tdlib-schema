<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Disables the currently enabled proxy. Can be called before authorization.
 */
class DisableProxy extends TdFunction
{
    public const TYPE_NAME = 'disableProxy';

    public function __construct()
    {
    }

    public static function fromArray(array $array): DisableProxy
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
