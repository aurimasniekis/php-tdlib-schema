<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the received vector of objects containing a string; for testing only. This is an offline method. Can be called before authorization.
 */
class TestCallVectorStringObject extends TdFunction
{
    public const TYPE_NAME = 'testCallVectorStringObject';

    /**
     * Vector of objects to return.
     *
     * @var TestString[]
     */
    protected array $x;

    public function __construct(array $x)
    {
        $this->x = $x;
    }

    public static function fromArray(array $array): TestCallVectorStringObject
    {
        return new static(
            array_map(fn ($x) => TestString::fromArray($x), $array['x']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->x),
        ];
    }

    public function getX(): array
    {
        return $this->x;
    }
}
