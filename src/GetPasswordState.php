<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the current state of 2-step verification.
 */
class GetPasswordState extends TdFunction
{
    public const TYPE_NAME = 'getPasswordState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetPasswordState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
