<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a country
 */
class CountryInfo extends TdObject
{
    public const TYPE_NAME = 'countryInfo';

    /**
     * A two-letter ISO 3166-1 alpha-2 country code
     *
     * @var string
     */
    protected string $countryCode;

    /**
     * Native name of the country
     *
     * @var string
     */
    protected string $name;

    /**
     * English name of the country
     *
     * @var string
     */
    protected string $englishName;

    /**
     * True, if the country should be hidden from the list of all countries
     *
     * @var bool
     */
    protected bool $isHidden;

    /**
     * List of country calling codes
     *
     * @var string[]
     */
    protected array $callingCodes;

    public function __construct(
        string $countryCode,
        string $name,
        string $englishName,
        bool $isHidden,
        array $callingCodes
    ) {
        $this->countryCode = $countryCode;
        $this->name = $name;
        $this->englishName = $englishName;
        $this->isHidden = $isHidden;
        $this->callingCodes = $callingCodes;
    }

    public static function fromArray(array $array): CountryInfo
    {
        return new static(
            $array['country_code'],
            $array['name'],
            $array['english_name'],
            $array['is_hidden'],
            $array['calling_codes'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'country_code' => $this->countryCode,
            'name' => $this->name,
            'english_name' => $this->englishName,
            'is_hidden' => $this->isHidden,
            'calling_codes' => $this->callingCodes,
        ];
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEnglishName(): string
    {
        return $this->englishName;
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    public function getCallingCodes(): array
    {
        return $this->callingCodes;
    }
}
