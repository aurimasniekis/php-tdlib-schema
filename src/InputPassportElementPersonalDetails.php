<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element to be saved containing the user's personal details
 */
class InputPassportElementPersonalDetails extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementPersonalDetails';

    /**
     * Personal details of the user
     *
     * @var PersonalDetails
     */
    protected PersonalDetails $personalDetails;

    public function __construct(PersonalDetails $personalDetails)
    {
        parent::__construct();

        $this->personalDetails = $personalDetails;
    }

    public static function fromArray(array $array): InputPassportElementPersonalDetails
    {
        return new static(
            TdSchemaRegistry::fromArray($array['personal_details']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'personal_details' => $this->personalDetails->typeSerialize(),
        ];
    }

    public function getPersonalDetails(): PersonalDetails
    {
        return $this->personalDetails;
    }
}
