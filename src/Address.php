<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes an address.
 */
class Address extends TdObject
{
    public const TYPE_NAME = 'address';

    /**
     * A two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var string
     */
    protected string $countryCode;

    /**
     * State, if applicable.
     *
     * @var string
     */
    protected string $state;

    /**
     * City.
     *
     * @var string
     */
    protected string $city;

    /**
     * First line of the address.
     *
     * @var string
     */
    protected string $streetLine1;

    /**
     * Second line of the address.
     *
     * @var string
     */
    protected string $streetLine2;

    /**
     * Address postal code.
     *
     * @var string
     */
    protected string $postalCode;

    public function __construct(string $countryCode, string $state, string $city, string $streetLine1, string $streetLine2, string $postalCode)
    {
        $this->countryCode = $countryCode;
        $this->state       = $state;
        $this->city        = $city;
        $this->streetLine1 = $streetLine1;
        $this->streetLine2 = $streetLine2;
        $this->postalCode  = $postalCode;
    }

    public static function fromArray(array $array): Address
    {
        return new static(
            $array['country_code'],
            $array['state'],
            $array['city'],
            $array['street_line1'],
            $array['street_line2'],
            $array['postal_code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'country_code' => $this->countryCode,
            'state'        => $this->state,
            'city'         => $this->city,
            'street_line1' => $this->streetLine1,
            'street_line2' => $this->streetLine2,
            'postal_code'  => $this->postalCode,
        ];
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getStreetLine1(): string
    {
        return $this->streetLine1;
    }

    public function getStreetLine2(): string
    {
        return $this->streetLine2;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
}
