<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element containing the user's rental agreement.
 */
class PassportElementRentalAgreement extends PassportElement
{
    public const TYPE_NAME = 'passportElementRentalAgreement';

    /**
     * Rental agreement.
     *
     * @var PersonalDocument
     */
    protected PersonalDocument $rentalAgreement;

    public function __construct(PersonalDocument $rentalAgreement)
    {
        parent::__construct();

        $this->rentalAgreement = $rentalAgreement;
    }

    public static function fromArray(array $array): PassportElementRentalAgreement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['rental_agreement']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'rental_agreement' => $this->rentalAgreement->typeSerialize(),
        ];
    }

    public function getRentalAgreement(): PersonalDocument
    {
        return $this->rentalAgreement;
    }
}
