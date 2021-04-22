<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a phone number.
 */
class PhoneNumberInfo extends TdObject
{
    public const TYPE_NAME = 'phoneNumberInfo';

    /**
     * Information about the country to which the phone number belongs; may be null.
     */
    protected ?CountryInfo $country;

    /**
     * The part of the phone number denoting country calling code or its part.
     */
    protected string $countryCallingCode;

    /**
     * The phone number without country calling code formatted accordingly to local rules.
     */
    protected string $formattedPhoneNumber;

    public function __construct(?CountryInfo $country, string $countryCallingCode, string $formattedPhoneNumber)
    {
        $this->country              = $country;
        $this->countryCallingCode   = $countryCallingCode;
        $this->formattedPhoneNumber = $formattedPhoneNumber;
    }

    public static function fromArray(array $array): PhoneNumberInfo
    {
        return new static(
            (isset($array['country']) ? TdSchemaRegistry::fromArray($array['country']) : null),
            $array['country_calling_code'],
            $array['formatted_phone_number'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'country'                => (isset($this->country) ? $this->country : null),
            'country_calling_code'   => $this->countryCallingCode,
            'formatted_phone_number' => $this->formattedPhoneNumber,
        ];
    }

    public function getCountry(): ?CountryInfo
    {
        return $this->country;
    }

    public function getCountryCallingCode(): string
    {
        return $this->countryCallingCode;
    }

    public function getFormattedPhoneNumber(): string
    {
        return $this->formattedPhoneNumber;
    }
}
