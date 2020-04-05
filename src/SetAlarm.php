<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Succeeds after a specified amount of time has passed. Can be called before authorization. Can be called before initialization.
 */
class SetAlarm extends TdFunction
{
    public const TYPE_NAME = 'setAlarm';

    /**
     * Number of seconds before the function returns.
     *
     * @var float
     */
    protected float $seconds;

    public function __construct(float $seconds)
    {
        $this->seconds = $seconds;
    }

    public static function fromArray(array $array): SetAlarm
    {
        return new static(
            $array['seconds'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'seconds' => $this->seconds,
        ];
    }

    public function getSeconds(): float
    {
        return $this->seconds;
    }
}
