<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a language pack.
 */
class LanguagePackInfo extends TdObject
{
    public const TYPE_NAME = 'languagePackInfo';

    /**
     * Unique language pack identifier.
     */
    protected string $id;

    /**
     * Identifier of a base language pack; may be empty. If a string is missed in the language pack, then it should be fetched from base language pack. Unsupported in custom language packs.
     */
    protected string $baseLanguagePackId;

    /**
     * Language name.
     */
    protected string $name;

    /**
     * Name of the language in that language.
     */
    protected string $nativeName;

    /**
     * A language code to be used to apply plural forms. See https://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html for more info.
     */
    protected string $pluralCode;

    /**
     * True, if the language pack is official.
     */
    protected bool $isOfficial;

    /**
     * True, if the language pack strings are RTL.
     */
    protected bool $isRtl;

    /**
     * True, if the language pack is a beta language pack.
     */
    protected bool $isBeta;

    /**
     * True, if the language pack is installed by the current user.
     */
    protected bool $isInstalled;

    /**
     * Total number of non-deleted strings from the language pack.
     */
    protected int $totalStringCount;

    /**
     * Total number of translated strings from the language pack.
     */
    protected int $translatedStringCount;

    /**
     * Total number of non-deleted strings from the language pack available locally.
     */
    protected int $localStringCount;

    /**
     * Link to language translation interface; empty for custom local language packs.
     */
    protected string $translationUrl;

    public function __construct(
        string $id,
        string $baseLanguagePackId,
        string $name,
        string $nativeName,
        string $pluralCode,
        bool $isOfficial,
        bool $isRtl,
        bool $isBeta,
        bool $isInstalled,
        int $totalStringCount,
        int $translatedStringCount,
        int $localStringCount,
        string $translationUrl
    ) {
        $this->id                    = $id;
        $this->baseLanguagePackId    = $baseLanguagePackId;
        $this->name                  = $name;
        $this->nativeName            = $nativeName;
        $this->pluralCode            = $pluralCode;
        $this->isOfficial            = $isOfficial;
        $this->isRtl                 = $isRtl;
        $this->isBeta                = $isBeta;
        $this->isInstalled           = $isInstalled;
        $this->totalStringCount      = $totalStringCount;
        $this->translatedStringCount = $translatedStringCount;
        $this->localStringCount      = $localStringCount;
        $this->translationUrl        = $translationUrl;
    }

    public static function fromArray(array $array): LanguagePackInfo
    {
        return new static(
            $array['id'],
            $array['base_language_pack_id'],
            $array['name'],
            $array['native_name'],
            $array['plural_code'],
            $array['is_official'],
            $array['is_rtl'],
            $array['is_beta'],
            $array['is_installed'],
            $array['total_string_count'],
            $array['translated_string_count'],
            $array['local_string_count'],
            $array['translation_url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'id'                      => $this->id,
            'base_language_pack_id'   => $this->baseLanguagePackId,
            'name'                    => $this->name,
            'native_name'             => $this->nativeName,
            'plural_code'             => $this->pluralCode,
            'is_official'             => $this->isOfficial,
            'is_rtl'                  => $this->isRtl,
            'is_beta'                 => $this->isBeta,
            'is_installed'            => $this->isInstalled,
            'total_string_count'      => $this->totalStringCount,
            'translated_string_count' => $this->translatedStringCount,
            'local_string_count'      => $this->localStringCount,
            'translation_url'         => $this->translationUrl,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getBaseLanguagePackId(): string
    {
        return $this->baseLanguagePackId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNativeName(): string
    {
        return $this->nativeName;
    }

    public function getPluralCode(): string
    {
        return $this->pluralCode;
    }

    public function getIsOfficial(): bool
    {
        return $this->isOfficial;
    }

    public function getIsRtl(): bool
    {
        return $this->isRtl;
    }

    public function getIsBeta(): bool
    {
        return $this->isBeta;
    }

    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    public function getTotalStringCount(): int
    {
        return $this->totalStringCount;
    }

    public function getTranslatedStringCount(): int
    {
        return $this->translatedStringCount;
    }

    public function getLocalStringCount(): int
    {
        return $this->localStringCount;
    }

    public function getTranslationUrl(): string
    {
        return $this->translationUrl;
    }
}
