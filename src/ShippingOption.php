<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * One shipping option.
 */
class ShippingOption extends TdObject
{
    public const TYPE_NAME = 'shippingOption';

    /**
     * Shipping option identifier.
     */
    protected string $id;

    /**
     * Option title.
     */
    protected string $title;

    /**
     * A list of objects used to calculate the total shipping costs.
     *
     * @var LabeledPricePart[]
     */
    protected array $priceParts;

    public function __construct(string $id, string $title, array $priceParts)
    {
        $this->id         = $id;
        $this->title      = $title;
        $this->priceParts = $priceParts;
    }

    public static function fromArray(array $array): ShippingOption
    {
        return new static(
            $array['id'],
            $array['title'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['priceParts']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'id'              => $this->id,
            'title'           => $this->title,
            array_map(fn ($x) => $x->typeSerialize(), $this->priceParts),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPriceParts(): array
    {
        return $this->priceParts;
    }
}
