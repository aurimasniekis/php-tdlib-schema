<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the received vector of numbers; for testing only. This is an offline method. Can be called before authorization
 */
class TestCallVectorInt extends TdFunction
{
    public const TYPE_NAME = 'testCallVectorInt';

    /**
     * Vector of numbers to return
     *
     * @var int[]
     */
    protected array $x;

    public function __construct(array $x)
    {
        $this->x = $x;
    }

    public static function fromArray(array $array): TestCallVectorInt
    {
        return new static(
            $array['x'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'x' => $this->x,
        ];
    }

    public function getX(): array
    {
        return $this->x;
    }
}
