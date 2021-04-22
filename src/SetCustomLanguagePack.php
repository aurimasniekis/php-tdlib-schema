<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Adds or changes a custom local language pack to the current localization target.
 */
class SetCustomLanguagePack extends TdFunction
{
    public const TYPE_NAME = 'setCustomLanguagePack';

    /**
     * Information about the language pack. Language pack ID must start with 'X', consist only of English letters, digits and hyphens, and must not exceed 64 characters. Can be called before authorization.
     */
    protected LanguagePackInfo $info;

    /**
     * Strings of the new language pack.
     *
     * @var LanguagePackString[]
     */
    protected array $strings;

    public function __construct(LanguagePackInfo $info, array $strings)
    {
        $this->info    = $info;
        $this->strings = $strings;
    }

    public static function fromArray(array $array): SetCustomLanguagePack
    {
        return new static(
            TdSchemaRegistry::fromArray($array['info']),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['strings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'info'            => $this->info->typeSerialize(),
            array_map(fn ($x) => $x->typeSerialize(), $this->strings),
        ];
    }

    public function getInfo(): LanguagePackInfo
    {
        return $this->info;
    }

    public function getStrings(): array
    {
        return $this->strings;
    }
}
