<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a temporary identifier of validated order information, which is stored for one hour. Also contains the available shipping options.
 */
class ValidatedOrderInfo extends TdObject
{
    public const TYPE_NAME = 'validatedOrderInfo';

    /**
     * Temporary identifier of the order information.
     *
     * @var string
     */
    protected string $orderInfoId;

    /**
     * Available shipping options.
     *
     * @var ShippingOption[]
     */
    protected array $shippingOptions;

    public function __construct(string $orderInfoId, array $shippingOptions)
    {
        $this->orderInfoId     = $orderInfoId;
        $this->shippingOptions = $shippingOptions;
    }

    public static function fromArray(array $array): ValidatedOrderInfo
    {
        return new static(
            $array['order_info_id'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['shippingOptions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'order_info_id'   => $this->orderInfoId,
            array_map(fn ($x) => $x->typeSerialize(), $this->shippingOptions),
        ];
    }

    public function getOrderInfoId(): string
    {
        return $this->orderInfoId;
    }

    public function getShippingOptions(): array
    {
        return $this->shippingOptions;
    }
}
