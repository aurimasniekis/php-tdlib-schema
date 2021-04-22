<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a string stored in the local database from the specified localization target and language pack by its key. Returns a 404 error if the string is not found. Can be called synchronously.
 */
class GetLanguagePackString extends TdFunction
{
    public const TYPE_NAME = 'getLanguagePackString';

    /**
     * Path to the language pack database in which strings are stored.
     */
    protected string $languagePackDatabasePath;

    /**
     * Localization target to which the language pack belongs.
     */
    protected string $localizationTarget;

    /**
     * Language pack identifier.
     */
    protected string $languagePackId;

    /**
     * Language pack key of the string to be returned.
     */
    protected string $key;

    public function __construct(
        string $languagePackDatabasePath,
        string $localizationTarget,
        string $languagePackId,
        string $key
    ) {
        $this->languagePackDatabasePath = $languagePackDatabasePath;
        $this->localizationTarget       = $localizationTarget;
        $this->languagePackId           = $languagePackId;
        $this->key                      = $key;
    }

    public static function fromArray(array $array): GetLanguagePackString
    {
        return new static(
            $array['language_pack_database_path'],
            $array['localization_target'],
            $array['language_pack_id'],
            $array['key'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'language_pack_database_path' => $this->languagePackDatabasePath,
            'localization_target'         => $this->localizationTarget,
            'language_pack_id'            => $this->languagePackId,
            'key'                         => $this->key,
        ];
    }

    public function getLanguagePackDatabasePath(): string
    {
        return $this->languagePackDatabasePath;
    }

    public function getLocalizationTarget(): string
    {
        return $this->localizationTarget;
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function getKey(): string
    {
        return $this->key;
    }
}
