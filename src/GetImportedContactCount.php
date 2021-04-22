<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the total number of imported contacts
 */
class GetImportedContactCount extends TdFunction
{
    public const TYPE_NAME = 'getImportedContactCount';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetImportedContactCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
