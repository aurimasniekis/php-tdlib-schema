<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A statistics value.
 */
class StatisticsValue extends TdObject
{
    public const TYPE_NAME = 'statisticsValue';

    /**
     * The value.
     */
    protected float $value;

    /**
     * The value for the previous day.
     */
    protected float $previousValue;

    /**
     * The growth rate of the value, as a percentage.
     */
    protected float $growthRatePercentage;

    public function __construct(float $value, float $previousValue, float $growthRatePercentage)
    {
        $this->value                = $value;
        $this->previousValue        = $previousValue;
        $this->growthRatePercentage = $growthRatePercentage;
    }

    public static function fromArray(array $array): StatisticsValue
    {
        return new static(
            $array['value'],
            $array['previous_value'],
            $array['growth_rate_percentage'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'value'                  => $this->value,
            'previous_value'         => $this->previousValue,
            'growth_rate_percentage' => $this->growthRatePercentage,
        ];
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function getPreviousValue(): float
    {
        return $this->previousValue;
    }

    public function getGrowthRatePercentage(): float
    {
        return $this->growthRatePercentage;
    }
}
