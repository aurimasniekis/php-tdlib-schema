<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A simple object containing a number; for testing only.
 */
class TestInt extends TdObject
{
    public const TYPE_NAME = 'testInt';

    /**
     * Number.
     *
     * @var int
     */
    protected int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function fromArray(array $array): TestInt
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

    public function getValue(): int
    {
        return $this->value;
    }
}
