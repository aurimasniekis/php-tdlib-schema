<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A simple object containing a vector of strings; for testing only
 */
class TestVectorString extends TdObject
{
    public const TYPE_NAME = 'testVectorString';

    /**
     * Vector of strings
     *
     * @var string[]
     */
    protected array $value;

    public function __construct(array $value)
    {
        $this->value = $value;
    }

    public static function fromArray(array $array): TestVectorString
    {
        return new static(
            $array['value'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
        ];
    }

    public function getValue(): array
    {
        return $this->value;
    }
}
