<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about found messages, split by days according to the option "utc_time_offset"
 */
class MessageCalendar extends TdObject
{
    public const TYPE_NAME = 'messageCalendar';

    /**
     * Total number of found messages
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * Information about messages sent
     *
     * @var MessageCalendarDay[]
     */
    protected array $days;

    public function __construct(int $totalCount, array $days)
    {
        $this->totalCount = $totalCount;
        $this->days = $days;
    }

    public static function fromArray(array $array): MessageCalendar
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['days']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->days),
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getDays(): array
    {
        return $this->days;
    }
}
