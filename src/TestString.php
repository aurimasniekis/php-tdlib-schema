<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A simple object containing a string; for testing only.
 */
class TestString extends TdObject
{
    public const TYPE_NAME = 'testString';

    /**
     * String.
     */
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function fromArray(array $array): TestString
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

    public function getValue(): string
    {
        return $this->value;
    }
}
