<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Order information
 */
class OrderInfo extends TdObject
{
    public const TYPE_NAME = 'orderInfo';

    /**
     * Name of the user
     *
     * @var string
     */
    protected string $name;

    /**
     * Phone number of the user
     *
     * @var string
     */
    protected string $phoneNumber;

    /**
     * Email address of the user
     *
     * @var string
     */
    protected string $emailAddress;

    /**
     * Shipping address for this order; may be null
     *
     * @var Address|null
     */
    protected ?Address $shippingAddress;

    public function __construct(string $name, string $phoneNumber, string $emailAddress, ?Address $shippingAddress)
    {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->emailAddress = $emailAddress;
        $this->shippingAddress = $shippingAddress;
    }

    public static function fromArray(array $array): OrderInfo
    {
        return new static(
            $array['name'],
            $array['phone_number'],
            $array['email_address'],
            (isset($array['shipping_address']) ? TdSchemaRegistry::fromArray($array['shipping_address']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
            'phone_number' => $this->phoneNumber,
            'email_address' => $this->emailAddress,
            'shipping_address' => (isset($this->shippingAddress) ? $this->shippingAddress : null),
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function getShippingAddress(): ?Address
    {
        return $this->shippingAddress;
    }
}
