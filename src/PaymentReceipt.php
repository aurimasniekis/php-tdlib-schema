<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a successful payment
 */
class PaymentReceipt extends TdObject
{
    public const TYPE_NAME = 'paymentReceipt';

    /**
     * Point in time (Unix timestamp) when the payment was made
     *
     * @var int
     */
    protected int $date;

    /**
     * User identifier of the payment provider bot
     *
     * @var int
     */
    protected int $paymentsProviderUserId;

    /**
     * Contains information about the invoice
     *
     * @var Invoice
     */
    protected Invoice $invoice;

    /**
     * Contains order information; may be null
     *
     * @var OrderInfo|null
     */
    protected ?OrderInfo $orderInfo;

    /**
     * Chosen shipping option; may be null
     *
     * @var ShippingOption|null
     */
    protected ?ShippingOption $shippingOption;

    /**
     * Title of the saved credentials
     *
     * @var string
     */
    protected string $credentialsTitle;

    public function __construct(
        int $date,
        int $paymentsProviderUserId,
        Invoice $invoice,
        ?OrderInfo $orderInfo,
        ?ShippingOption $shippingOption,
        string $credentialsTitle
    ) {
        $this->date = $date;
        $this->paymentsProviderUserId = $paymentsProviderUserId;
        $this->invoice = $invoice;
        $this->orderInfo = $orderInfo;
        $this->shippingOption = $shippingOption;
        $this->credentialsTitle = $credentialsTitle;
    }

    public static function fromArray(array $array): PaymentReceipt
    {
        return new static(
            $array['date'],
            $array['payments_provider_user_id'],
            TdSchemaRegistry::fromArray($array['invoice']),
            (isset($array['order_info']) ? TdSchemaRegistry::fromArray($array['order_info']) : null),
            (isset($array['shipping_option']) ? TdSchemaRegistry::fromArray($array['shipping_option']) : null),
            $array['credentials_title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'date' => $this->date,
            'payments_provider_user_id' => $this->paymentsProviderUserId,
            'invoice' => $this->invoice->typeSerialize(),
            'order_info' => (isset($this->orderInfo) ? $this->orderInfo : null),
            'shipping_option' => (isset($this->shippingOption) ? $this->shippingOption : null),
            'credentials_title' => $this->credentialsTitle,
        ];
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getPaymentsProviderUserId(): int
    {
        return $this->paymentsProviderUserId;
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function getOrderInfo(): ?OrderInfo
    {
        return $this->orderInfo;
    }

    public function getShippingOption(): ?ShippingOption
    {
        return $this->shippingOption;
    }

    public function getCredentialsTitle(): string
    {
        return $this->credentialsTitle;
    }
}
