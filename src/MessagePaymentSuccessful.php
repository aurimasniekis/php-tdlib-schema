<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A payment has been completed.
 */
class MessagePaymentSuccessful extends MessageContent
{
    public const TYPE_NAME = 'messagePaymentSuccessful';

    /**
     * Identifier of the message with the corresponding invoice; can be an identifier of a deleted message.
     *
     * @var int
     */
    protected int $invoiceMessageId;

    /**
     * Currency for the price of the product.
     *
     * @var string
     */
    protected string $currency;

    /**
     * Total price for the product, in the minimal quantity of the currency.
     *
     * @var int
     */
    protected int $totalAmount;

    public function __construct(int $invoiceMessageId, string $currency, int $totalAmount)
    {
        parent::__construct();

        $this->invoiceMessageId = $invoiceMessageId;
        $this->currency         = $currency;
        $this->totalAmount      = $totalAmount;
    }

    public static function fromArray(array $array): MessagePaymentSuccessful
    {
        return new static(
            $array['invoice_message_id'],
            $array['currency'],
            $array['total_amount'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'invoice_message_id' => $this->invoiceMessageId,
            'currency'           => $this->currency,
            'total_amount'       => $this->totalAmount,
        ];
    }

    public function getInvoiceMessageId(): int
    {
        return $this->invoiceMessageId;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }
}
