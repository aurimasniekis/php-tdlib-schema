<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of language pack strings.
 */
class LanguagePackStrings extends TdObject
{
    public const TYPE_NAME = 'languagePackStrings';

    /**
     * A list of language pack strings.
     *
     * @var LanguagePackString[]
     */
    protected array $strings;

    public function __construct(array $strings)
    {
        $this->strings = $strings;
    }

    public static function fromArray(array $array): LanguagePackStrings
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['strings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->strings),
        ];
    }

    public function getStrings(): array
    {
        return $this->strings;
    }
}
