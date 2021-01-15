<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element containing the user's utility bill.
 */
class PassportElementUtilityBill extends PassportElement
{
    public const TYPE_NAME = 'passportElementUtilityBill';

    /**
     * Utility bill.
     *
     * @var PersonalDocument
     */
    protected PersonalDocument $utilityBill;

    public function __construct(PersonalDocument $utilityBill)
    {
        parent::__construct();

        $this->utilityBill = $utilityBill;
    }

    public static function fromArray(array $array): PassportElementUtilityBill
    {
        return new static(
            TdSchemaRegistry::fromArray($array['utility_bill']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'utility_bill' => $this->utilityBill->typeSerialize(),
        ];
    }

    public function getUtilityBill(): PersonalDocument
    {
        return $this->utilityBill;
    }
}
