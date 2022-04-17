<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Product invoice
 */
class Invoice extends TdObject
{
    public const TYPE_NAME = 'invoice';

    /**
     * ISO 4217 currency code
     *
     * @var string
     */
    protected string $currency;

    /**
     * A list of objects used to calculate the total price of the product
     *
     * @var LabeledPricePart[]
     */
    protected array $priceParts;

    /**
     * The maximum allowed amount of tip in the smallest units of the currency
     *
     * @var int
     */
    protected int $maxTipAmount;

    /**
     * Suggested amounts of tip in the smallest units of the currency
     *
     * @var int[]
     */
    protected array $suggestedTipAmounts;

    /**
     * True, if the payment is a test payment
     *
     * @var bool
     */
    protected bool $isTest;

    /**
     * True, if the user's name is needed for payment
     *
     * @var bool
     */
    protected bool $needName;

    /**
     * True, if the user's phone number is needed for payment
     *
     * @var bool
     */
    protected bool $needPhoneNumber;

    /**
     * True, if the user's email address is needed for payment
     *
     * @var bool
     */
    protected bool $needEmailAddress;

    /**
     * True, if the user's shipping address is needed for payment
     *
     * @var bool
     */
    protected bool $needShippingAddress;

    /**
     * True, if the user's phone number will be sent to the provider
     *
     * @var bool
     */
    protected bool $sendPhoneNumberToProvider;

    /**
     * True, if the user's email address will be sent to the provider
     *
     * @var bool
     */
    protected bool $sendEmailAddressToProvider;

    /**
     * True, if the total price depends on the shipping method
     *
     * @var bool
     */
    protected bool $isFlexible;

    public function __construct(
        string $currency,
        array $priceParts,
        int $maxTipAmount,
        array $suggestedTipAmounts,
        bool $isTest,
        bool $needName,
        bool $needPhoneNumber,
        bool $needEmailAddress,
        bool $needShippingAddress,
        bool $sendPhoneNumberToProvider,
        bool $sendEmailAddressToProvider,
        bool $isFlexible
    ) {
        $this->currency = $currency;
        $this->priceParts = $priceParts;
        $this->maxTipAmount = $maxTipAmount;
        $this->suggestedTipAmounts = $suggestedTipAmounts;
        $this->isTest = $isTest;
        $this->needName = $needName;
        $this->needPhoneNumber = $needPhoneNumber;
        $this->needEmailAddress = $needEmailAddress;
        $this->needShippingAddress = $needShippingAddress;
        $this->sendPhoneNumberToProvider = $sendPhoneNumberToProvider;
        $this->sendEmailAddressToProvider = $sendEmailAddressToProvider;
        $this->isFlexible = $isFlexible;
    }

    public static function fromArray(array $array): Invoice
    {
        return new static(
            $array['currency'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['price_parts']),
            $array['max_tip_amount'],
            $array['suggested_tip_amounts'],
            $array['is_test'],
            $array['need_name'],
            $array['need_phone_number'],
            $array['need_email_address'],
            $array['need_shipping_address'],
            $array['send_phone_number_to_provider'],
            $array['send_email_address_to_provider'],
            $array['is_flexible'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'currency' => $this->currency,
            array_map(fn($x) => $x->typeSerialize(), $this->priceParts),
            'max_tip_amount' => $this->maxTipAmount,
            'suggested_tip_amounts' => $this->suggestedTipAmounts,
            'is_test' => $this->isTest,
            'need_name' => $this->needName,
            'need_phone_number' => $this->needPhoneNumber,
            'need_email_address' => $this->needEmailAddress,
            'need_shipping_address' => $this->needShippingAddress,
            'send_phone_number_to_provider' => $this->sendPhoneNumberToProvider,
            'send_email_address_to_provider' => $this->sendEmailAddressToProvider,
            'is_flexible' => $this->isFlexible,
        ];
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getPriceParts(): array
    {
        return $this->priceParts;
    }

    public function getMaxTipAmount(): int
    {
        return $this->maxTipAmount;
    }

    public function getSuggestedTipAmounts(): array
    {
        return $this->suggestedTipAmounts;
    }

    public function getIsTest(): bool
    {
        return $this->isTest;
    }

    public function getNeedName(): bool
    {
        return $this->needName;
    }

    public function getNeedPhoneNumber(): bool
    {
        return $this->needPhoneNumber;
    }

    public function getNeedEmailAddress(): bool
    {
        return $this->needEmailAddress;
    }

    public function getNeedShippingAddress(): bool
    {
        return $this->needShippingAddress;
    }

    public function getSendPhoneNumberToProvider(): bool
    {
        return $this->sendPhoneNumberToProvider;
    }

    public function getSendEmailAddressToProvider(): bool
    {
        return $this->sendEmailAddressToProvider;
    }

    public function getIsFlexible(): bool
    {
        return $this->isFlexible;
    }
}
