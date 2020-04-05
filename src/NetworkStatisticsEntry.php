<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains statistics about network usage.
 */
class NetworkStatisticsEntry extends TdObject
{
    public const TYPE_NAME = 'NetworkStatisticsEntry';

    public function __construct()
    {
    }

    public static function fromArray(array $array): NetworkStatisticsEntry
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
