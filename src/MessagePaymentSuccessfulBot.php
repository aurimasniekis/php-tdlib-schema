<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A payment has been completed; for bots only.
 */
class MessagePaymentSuccessfulBot extends MessageContent
{
    public const TYPE_NAME = 'messagePaymentSuccessfulBot';

    /**
     * Identifier of the message with the corresponding invoice; can be an identifier of a deleted message.
     *
     * @var int
     */
    protected int $invoiceMessageId;

    /**
     * Currency for price of the product.
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

    /**
     * Invoice payload.
     *
     * @var string
     */
    protected string $invoicePayload;

    /**
     * Identifier of the shipping option chosen by the user; may be empty if not applicable.
     *
     * @var string
     */
    protected string $shippingOptionId;

    /**
     * Information about the order; may be null.
     *
     * @var OrderInfo|null
     */
    protected ?OrderInfo $orderInfo;

    /**
     * Telegram payment identifier.
     *
     * @var string
     */
    protected string $telegramPaymentChargeId;

    /**
     * Provider payment identifier.
     *
     * @var string
     */
    protected string $providerPaymentChargeId;

    public function __construct(
        int $invoiceMessageId,
        string $currency,
        int $totalAmount,
        string $invoicePayload,
        string $shippingOptionId,
        ?OrderInfo $orderInfo,
        string $telegramPaymentChargeId,
        string $providerPaymentChargeId
    ) {
        parent::__construct();

        $this->invoiceMessageId        = $invoiceMessageId;
        $this->currency                = $currency;
        $this->totalAmount             = $totalAmount;
        $this->invoicePayload          = $invoicePayload;
        $this->shippingOptionId        = $shippingOptionId;
        $this->orderInfo               = $orderInfo;
        $this->telegramPaymentChargeId = $telegramPaymentChargeId;
        $this->providerPaymentChargeId = $providerPaymentChargeId;
    }

    public static function fromArray(array $array): MessagePaymentSuccessfulBot
    {
        return new static(
            $array['invoice_message_id'],
            $array['currency'],
            $array['total_amount'],
            $array['invoice_payload'],
            $array['shipping_option_id'],
            (isset($array['order_info']) ? TdSchemaRegistry::fromArray($array['order_info']) : null),
            $array['telegram_payment_charge_id'],
            $array['provider_payment_charge_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'invoice_message_id'         => $this->invoiceMessageId,
            'currency'                   => $this->currency,
            'total_amount'               => $this->totalAmount,
            'invoice_payload'            => $this->invoicePayload,
            'shipping_option_id'         => $this->shippingOptionId,
            'order_info'                 => (isset($this->orderInfo) ? $this->orderInfo : null),
            'telegram_payment_charge_id' => $this->telegramPaymentChargeId,
            'provider_payment_charge_id' => $this->providerPaymentChargeId,
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

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
    }

    public function getOrderInfo(): ?OrderInfo
    {
        return $this->orderInfo;
    }

    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    public function getProviderPaymentChargeId(): string
    {
        return $this->providerPaymentChargeId;
    }
}
