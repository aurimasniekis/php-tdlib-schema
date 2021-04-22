<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new incoming pre-checkout query; for bots only. Contains full information about a checkout
 */
class UpdateNewPreCheckoutQuery extends Update
{
    public const TYPE_NAME = 'updateNewPreCheckoutQuery';

    /**
     * Unique query identifier
     *
     * @var string
     */
    protected string $id;

    /**
     * Identifier of the user who sent the query
     *
     * @var int
     */
    protected int $senderUserId;

    /**
     * Currency for the product price
     *
     * @var string
     */
    protected string $currency;

    /**
     * Total price for the product, in the minimal quantity of the currency
     *
     * @var int
     */
    protected int $totalAmount;

    /**
     * Invoice payload
     *
     * @var string
     */
    protected string $invoicePayload;

    /**
     * Identifier of a shipping option chosen by the user; may be empty if not applicable
     *
     * @var string
     */
    protected string $shippingOptionId;

    /**
     * Information about the order; may be null
     *
     * @var OrderInfo|null
     */
    protected ?OrderInfo $orderInfo;

    public function __construct(
        string $id,
        int $senderUserId,
        string $currency,
        int $totalAmount,
        string $invoicePayload,
        string $shippingOptionId,
        ?OrderInfo $orderInfo
    ) {
        parent::__construct();

        $this->id = $id;
        $this->senderUserId = $senderUserId;
        $this->currency = $currency;
        $this->totalAmount = $totalAmount;
        $this->invoicePayload = $invoicePayload;
        $this->shippingOptionId = $shippingOptionId;
        $this->orderInfo = $orderInfo;
    }

    public static function fromArray(array $array): UpdateNewPreCheckoutQuery
    {
        return new static(
            $array['id'],
            $array['sender_user_id'],
            $array['currency'],
            $array['total_amount'],
            $array['invoice_payload'],
            $array['shipping_option_id'],
            (isset($array['order_info']) ? TdSchemaRegistry::fromArray($array['order_info']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'sender_user_id' => $this->senderUserId,
            'currency' => $this->currency,
            'total_amount' => $this->totalAmount,
            'invoice_payload' => $this->invoicePayload,
            'shipping_option_id' => $this->shippingOptionId,
            'order_info' => (isset($this->orderInfo) ? $this->orderInfo : null),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
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
}
