<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element to be saved containing the user's utility bill
 */
class InputPassportElementUtilityBill extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementUtilityBill';

    /**
     * The utility bill to be saved
     *
     * @var InputPersonalDocument
     */
    protected InputPersonalDocument $utilityBill;

    public function __construct(InputPersonalDocument $utilityBill)
    {
        parent::__construct();

        $this->utilityBill = $utilityBill;
    }

    public static function fromArray(array $array): InputPassportElementUtilityBill
    {
        return new static(
            TdSchemaRegistry::fromArray($array['utility_bill']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'utility_bill' => $this->utilityBill->typeSerialize(),
        ];
    }

    public function getUtilityBill(): InputPersonalDocument
    {
        return $this->utilityBill;
    }
}
