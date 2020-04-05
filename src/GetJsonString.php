<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Converts a JsonValue object to corresponding JSON-serialized string. This is an offline method. Can be called before authorization. Can be called synchronously.
 */
class GetJsonString extends TdFunction
{
    public const TYPE_NAME = 'getJsonString';

    /**
     * The JsonValue object.
     *
     * @var JsonValue
     */
    protected JsonValue $jsonValue;

    public function __construct(JsonValue $jsonValue)
    {
        $this->jsonValue = $jsonValue;
    }

    public static function fromArray(array $array): GetJsonString
    {
        return new static(
            TdSchemaRegistry::fromArray($array['json_value']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'json_value' => $this->jsonValue->typeSerialize(),
        ];
    }

    public function getJsonValue(): JsonValue
    {
        return $this->jsonValue;
    }
}
