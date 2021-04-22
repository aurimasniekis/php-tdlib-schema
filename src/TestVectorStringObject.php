<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A simple object containing a vector of objects that hold a string; for testing only.
 */
class TestVectorStringObject extends TdObject
{
    public const TYPE_NAME = 'testVectorStringObject';

    /**
     * Vector of objects.
     *
     * @var TestString[]
     */
    protected array $value;

    public function __construct(array $value)
    {
        $this->value = $value;
    }

    public static function fromArray(array $array): TestVectorStringObject
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['value']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->value),
        ];
    }

    public function getValue(): array
    {
        return $this->value;
    }
}
