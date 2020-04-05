<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with an invoice from a bot.
 */
class MessageInvoice extends MessageContent
{
    public const TYPE_NAME = 'messageInvoice';

    /**
     * Product title.
     *
     * @var string
     */
    protected string $title;

    /**
     * Product description.
     *
     * @var string
     */
    protected string $description;

    /**
     * Product photo; may be null.
     *
     * @var Photo|null
     */
    protected ?Photo $photo;

    /**
     * Currency for the product price.
     *
     * @var string
     */
    protected string $currency;

    /**
     * Product total price in the minimal quantity of the currency.
     *
     * @var int
     */
    protected int $totalAmount;

    /**
     * Unique invoice bot start_parameter. To share an invoice use the URL https://t.me/{bot_username}?start={start_parameter}.
     *
     * @var string
     */
    protected string $startParameter;

    /**
     * True, if the invoice is a test invoice.
     *
     * @var bool
     */
    protected bool $isTest;

    /**
     * True, if the shipping address should be specified.
     *
     * @var bool
     */
    protected bool $needShippingAddress;

    /**
     * The identifier of the message with the receipt, after the product has been purchased.
     *
     * @var int
     */
    protected int $receiptMessageId;

    public function __construct(
        string $title,
        string $description,
        ?Photo $photo,
        string $currency,
        int $totalAmount,
        string $startParameter,
        bool $isTest,
        bool $needShippingAddress,
        int $receiptMessageId
    ) {
        parent::__construct();

        $this->title               = $title;
        $this->description         = $description;
        $this->photo               = $photo;
        $this->currency            = $currency;
        $this->totalAmount         = $totalAmount;
        $this->startParameter      = $startParameter;
        $this->isTest              = $isTest;
        $this->needShippingAddress = $needShippingAddress;
        $this->receiptMessageId    = $receiptMessageId;
    }

    public static function fromArray(array $array): MessageInvoice
    {
        return new static(
            $array['title'],
            $array['param_description'],
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['currency'],
            $array['total_amount'],
            $array['start_parameter'],
            $array['is_test'],
            $array['need_shipping_address'],
            $array['receipt_message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'title'                 => $this->title,
            'param_description'     => $this->description,
            'photo'                 => (isset($this->photo) ? $this->photo : null),
            'currency'              => $this->currency,
            'total_amount'          => $this->totalAmount,
            'start_parameter'       => $this->startParameter,
            'is_test'               => $this->isTest,
            'need_shipping_address' => $this->needShippingAddress,
            'receipt_message_id'    => $this->receiptMessageId,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    public function getIsTest(): bool
    {
        return $this->isTest;
    }

    public function getNeedShippingAddress(): bool
    {
        return $this->needShippingAddress;
    }

    public function getReceiptMessageId(): int
    {
        return $this->receiptMessageId;
    }
}
