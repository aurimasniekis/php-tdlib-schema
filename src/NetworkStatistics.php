<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A full list of available network statistic entries
 */
class NetworkStatistics extends TdObject
{
    public const TYPE_NAME = 'networkStatistics';

    /**
     * Point in time (Unix timestamp) from which the statistics are collected
     *
     * @var int
     */
    protected int $sinceDate;

    /**
     * Network statistics entries
     *
     * @var NetworkStatisticsEntry[]
     */
    protected array $entries;

    public function __construct(int $sinceDate, array $entries)
    {
        $this->sinceDate = $sinceDate;
        $this->entries = $entries;
    }

    public static function fromArray(array $array): NetworkStatistics
    {
        return new static(
            $array['since_date'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['entries']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'since_date' => $this->sinceDate,
            array_map(fn($x) => $x->typeSerialize(), $this->entries),
        ];
    }

    public function getSinceDate(): int
    {
        return $this->sinceDate;
    }

    public function getEntries(): array
    {
        return $this->entries;
    }
}
