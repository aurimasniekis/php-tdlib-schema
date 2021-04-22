<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a statistical graph.
 */
class StatisticalGraph extends TdObject
{
    public const TYPE_NAME = 'StatisticalGraph';

    public function __construct()
    {
    }

    public static function fromArray(array $array): StatisticalGraph
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
