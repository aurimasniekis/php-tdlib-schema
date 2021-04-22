<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns database statistics.
 */
class GetDatabaseStatistics extends TdFunction
{
    public const TYPE_NAME = 'getDatabaseStatistics';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetDatabaseStatistics
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
