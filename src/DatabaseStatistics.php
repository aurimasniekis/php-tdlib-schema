<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains database statistics.
 */
class DatabaseStatistics extends TdObject
{
    public const TYPE_NAME = 'databaseStatistics';

    /**
     * Database statistics in an unspecified human-readable format.
     *
     * @var string
     */
    protected string $statistics;

    public function __construct(string $statistics)
    {
        $this->statistics = $statistics;
    }

    public static function fromArray(array $array): DatabaseStatistics
    {
        return new static(
            $array['statistics'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'statistics' => $this->statistics,
        ];
    }

    public function getStatistics(): string
    {
        return $this->statistics;
    }
}
