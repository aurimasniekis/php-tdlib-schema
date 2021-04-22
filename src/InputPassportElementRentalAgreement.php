<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element to be saved containing the user's rental agreement.
 */
class InputPassportElementRentalAgreement extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementRentalAgreement';

    /**
     * The rental agreement to be saved.
     */
    protected InputPersonalDocument $rentalAgreement;

    public function __construct(InputPersonalDocument $rentalAgreement)
    {
        parent::__construct();

        $this->rentalAgreement = $rentalAgreement;
    }

    public static function fromArray(array $array): InputPassportElementRentalAgreement
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

    public function getRentalAgreement(): InputPersonalDocument
    {
        return $this->rentalAgreement;
    }
}
