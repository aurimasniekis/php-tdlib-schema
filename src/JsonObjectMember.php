<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents one member of a JSON object
 */
class JsonObjectMember extends TdObject
{
    public const TYPE_NAME = 'jsonObjectMember';

    /**
     * Member's key
     *
     * @var string
     */
    protected string $key;

    /**
     * Member's value
     *
     * @var JsonValue
     */
    protected JsonValue $value;

    public function __construct(string $key, JsonValue $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    public static function fromArray(array $array): JsonObjectMember
    {
        return new static(
            $array['key'],
            TdSchemaRegistry::fromArray($array['value']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'key' => $this->key,
            'value' => $this->value->typeSerialize(),
        ];
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): JsonValue
    {
        return $this->value;
    }
}
