<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a string JSON value.
 */
class JsonValueString extends JsonValue
{
    public const TYPE_NAME = 'jsonValueString';

    /**
     * The value.
     */
    protected string $value;

    public function __construct(string $value)
    {
        parent::__construct();

        $this->value = $value;
    }

    public static function fromArray(array $array): JsonValueString
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
