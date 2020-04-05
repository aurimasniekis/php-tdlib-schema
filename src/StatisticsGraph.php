<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Descrbes a statistics graph.
 */
class StatisticsGraph extends TdObject
{
    public const TYPE_NAME = 'StatisticsGraph';

    public function __construct()
    {
    }

    public static function fromArray(array $array): StatisticsGraph
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
