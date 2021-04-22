<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a value representing a number of seconds.
 */
class Seconds extends TdObject
{
    public const TYPE_NAME = 'seconds';

    /**
     * Number of seconds.
     */
    protected float $seconds;

    public function __construct(float $seconds)
    {
        $this->seconds = $seconds;
    }

    public static function fromArray(array $array): Seconds
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
