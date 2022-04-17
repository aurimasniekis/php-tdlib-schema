<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about saved Telegram Passport elements
 */
class PassportElements extends TdObject
{
    public const TYPE_NAME = 'passportElements';

    /**
     * Telegram Passport elements
     *
     * @var PassportElement[]
     */
    protected array $elements;

    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    public static function fromArray(array $array): PassportElements
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['elements']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->elements),
        ];
    }

    public function getElements(): array
    {
        return $this->elements;
    }
}
