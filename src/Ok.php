<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An object of this type is returned on a successful function call for certain functions
 */
class Ok extends TdObject
{
    public const TYPE_NAME = 'ok';

    public function __construct()
    {
    }

    public static function fromArray(array $array): Ok
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
