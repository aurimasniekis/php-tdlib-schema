<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a JSON value
 */
class JsonValue extends TdObject
{
    public const TYPE_NAME = 'JsonValue';

    public function __construct()
    {
    }

    public static function fromArray(array $array): JsonValue
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
