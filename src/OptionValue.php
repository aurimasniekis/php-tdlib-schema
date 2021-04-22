<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents the value of an option.
 */
class OptionValue extends TdObject
{
    public const TYPE_NAME = 'OptionValue';

    public function __construct()
    {
    }

    public static function fromArray(array $array): OptionValue
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
