<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Quickly returns approximate storage usage statistics. Can be called before authorization.
 */
class GetStorageStatisticsFast extends TdFunction
{
    public const TYPE_NAME = 'getStorageStatisticsFast';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetStorageStatisticsFast
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
