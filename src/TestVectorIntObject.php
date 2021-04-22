<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A simple object containing a vector of objects that hold a number; for testing only
 */
class TestVectorIntObject extends TdObject
{
    public const TYPE_NAME = 'testVectorIntObject';

    /**
     * Vector of objects
     *
     * @var TestInt[]
     */
    protected array $value;

    public function __construct(array $value)
    {
        $this->value = $value;
    }

    public static function fromArray(array $array): TestVectorIntObject
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['value']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->value),
        ];
    }

    public function getValue(): array
    {
        return $this->value;
    }
}
