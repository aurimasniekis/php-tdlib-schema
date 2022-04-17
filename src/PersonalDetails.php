<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains the user's personal details
 */
class PersonalDetails extends TdObject
{
    public const TYPE_NAME = 'personalDetails';

    /**
     * First name of the user written in English; 1-255 characters
     *
     * @var string
     */
    protected string $firstName;

    /**
     * Middle name of the user written in English; 0-255 characters
     *
     * @var string
     */
    protected string $middleName;

    /**
     * Last name of the user written in English; 1-255 characters
     *
     * @var string
     */
    protected string $lastName;

    /**
     * Native first name of the user; 1-255 characters
     *
     * @var string
     */
    protected string $nativeFirstName;

    /**
     * Native middle name of the user; 0-255 characters
     *
     * @var string
     */
    protected string $nativeMiddleName;

    /**
     * Native last name of the user; 1-255 characters
     *
     * @var string
     */
    protected string $nativeLastName;

    /**
     * Birthdate of the user
     *
     * @var Date
     */
    protected Date $birthdate;

    /**
     * Gender of the user, "male" or "female"
     *
     * @var string
     */
    protected string $gender;

    /**
     * A two-letter ISO 3166-1 alpha-2 country code of the user's country
     *
     * @var string
     */
    protected string $countryCode;

    /**
     * A two-letter ISO 3166-1 alpha-2 country code of the user's residence country
     *
     * @var string
     */
    protected string $residenceCountryCode;

    public function __construct(
        string $firstName,
        string $middleName,
        string $lastName,
        string $nativeFirstName,
        string $nativeMiddleName,
        string $nativeLastName,
        Date $birthdate,
        string $gender,
        string $countryCode,
        string $residenceCountryCode
    ) {
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->nativeFirstName = $nativeFirstName;
        $this->nativeMiddleName = $nativeMiddleName;
        $this->nativeLastName = $nativeLastName;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
        $this->countryCode = $countryCode;
        $this->residenceCountryCode = $residenceCountryCode;
    }

    public static function fromArray(array $array): PersonalDetails
    {
        return new static(
            $array['first_name'],
            $array['middle_name'],
            $array['last_name'],
            $array['native_first_name'],
            $array['native_middle_name'],
            $array['native_last_name'],
            TdSchemaRegistry::fromArray($array['birthdate']),
            $array['gender'],
            $array['country_code'],
            $array['residence_country_code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'first_name' => $this->firstName,
            'middle_name' => $this->middleName,
            'last_name' => $this->lastName,
            'native_first_name' => $this->nativeFirstName,
            'native_middle_name' => $this->nativeMiddleName,
            'native_last_name' => $this->nativeLastName,
            'birthdate' => $this->birthdate->typeSerialize(),
            'gender' => $this->gender,
            'country_code' => $this->countryCode,
            'residence_country_code' => $this->residenceCountryCode,
        ];
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getNativeFirstName(): string
    {
        return $this->nativeFirstName;
    }

    public function getNativeMiddleName(): string
    {
        return $this->nativeMiddleName;
    }

    public function getNativeLastName(): string
    {
        return $this->nativeLastName;
    }

    public function getBirthdate(): Date
    {
        return $this->birthdate;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getResidenceCountryCode(): string
    {
        return $this->residenceCountryCode;
    }
}
