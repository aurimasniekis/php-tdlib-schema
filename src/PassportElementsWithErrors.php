<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a Telegram Passport elements and corresponding errors.
 */
class PassportElementsWithErrors extends TdObject
{
    public const TYPE_NAME = 'passportElementsWithErrors';

    /**
     * Telegram Passport elements.
     *
     * @var PassportElement[]
     */
    protected array $elements;

    /**
     * Errors in the elements that are already available.
     *
     * @var PassportElementError[]
     */
    protected array $errors;

    public function __construct(array $elements, array $errors)
    {
        $this->elements = $elements;
        $this->errors   = $errors;
    }

    public static function fromArray(array $array): PassportElementsWithErrors
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['elements']),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['errors']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->elements),
            array_map(fn ($x) => $x->typeSerialize(), $this->errors),
        ];
    }

    public function getElements(): array
    {
        return $this->elements;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
