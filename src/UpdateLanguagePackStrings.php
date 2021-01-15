<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Some language pack strings have been updated.
 */
class UpdateLanguagePackStrings extends Update
{
    public const TYPE_NAME = 'updateLanguagePackStrings';

    /**
     * Localization target to which the language pack belongs.
     */
    protected string $localizationTarget;

    /**
     * Identifier of the updated language pack.
     */
    protected string $languagePackId;

    /**
     * List of changed language pack strings.
     *
     * @var LanguagePackString[]
     */
    protected array $strings;

    public function __construct(string $localizationTarget, string $languagePackId, array $strings)
    {
        parent::__construct();

        $this->localizationTarget = $localizationTarget;
        $this->languagePackId     = $languagePackId;
        $this->strings            = $strings;
    }

    public static function fromArray(array $array): UpdateLanguagePackStrings
    {
        return new static(
            $array['localization_target'],
            $array['language_pack_id'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['strings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'localization_target' => $this->localizationTarget,
            'language_pack_id'    => $this->languagePackId,
            array_map(fn ($x)     => $x->typeSerialize(), $this->strings),
        ];
    }

    public function getLocalizationTarget(): string
    {
        return $this->localizationTarget;
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function getStrings(): array
    {
        return $this->strings;
    }
}
