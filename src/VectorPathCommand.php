<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a vector path command
 */
class VectorPathCommand extends TdObject
{
    public const TYPE_NAME = 'VectorPathCommand';

    public function __construct()
    {
    }

    public static function fromArray(array $array): VectorPathCommand
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
