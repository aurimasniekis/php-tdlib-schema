<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a bank card
 */
class GetBankCardInfo extends TdFunction
{
    public const TYPE_NAME = 'getBankCardInfo';

    /**
     * The bank card number
     *
     * @var string
     */
    protected string $bankCardNumber;

    public function __construct(string $bankCardNumber)
    {
        $this->bankCardNumber = $bankCardNumber;
    }

    public static function fromArray(array $array): GetBankCardInfo
    {
        return new static(
            $array['bank_card_number'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bank_card_number' => $this->bankCardNumber,
        ];
    }

    public function getBankCardNumber(): string
    {
        return $this->bankCardNumber;
    }
}
