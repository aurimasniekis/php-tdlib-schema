<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a date according to the Gregorian calendar
 */
class Date extends TdObject
{
    public const TYPE_NAME = 'date';

    /**
     * Day of the month, 1-31
     *
     * @var int
     */
    protected int $day;

    /**
     * Month, 1-12
     *
     * @var int
     */
    protected int $month;

    /**
     * Year, 1-9999
     *
     * @var int
     */
    protected int $year;

    public function __construct(int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public static function fromArray(array $array): Date
    {
        return new static(
            $array['day'],
            $array['month'],
            $array['year'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'day' => $this->day,
            'month' => $this->month,
            'year' => $this->year,
        ];
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}
