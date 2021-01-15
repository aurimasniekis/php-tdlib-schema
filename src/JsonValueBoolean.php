<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a boolean JSON value.
 */
class JsonValueBoolean extends JsonValue
{
    public const TYPE_NAME = 'jsonValueBoolean';

    /**
     * The value.
     */
    protected bool $value;

    public function __construct(bool $value)
    {
        parent::__construct();

        $this->value = $value;
    }

    public static function fromArray(array $array): JsonValueBoolean
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

    public function getValue(): bool
    {
        return $this->value;
    }
}
