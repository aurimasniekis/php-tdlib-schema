<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents the type of a file.
 */
class FileType extends TdObject
{
    public const TYPE_NAME = 'FileType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): FileType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
