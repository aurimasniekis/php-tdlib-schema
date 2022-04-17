<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents one language pack string
 */
class LanguagePackString extends TdObject
{
    public const TYPE_NAME = 'languagePackString';

    /**
     * String key
     *
     * @var string
     */
    protected string $key;

    /**
     * String value; pass null if the string needs to be taken from the built-in English language pack
     *
     * @var LanguagePackStringValue
     */
    protected LanguagePackStringValue $value;

    public function __construct(string $key, LanguagePackStringValue $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    public static function fromArray(array $array): LanguagePackString
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

    public function getValue(): LanguagePackStringValue
    {
        return $this->value;
    }
}
