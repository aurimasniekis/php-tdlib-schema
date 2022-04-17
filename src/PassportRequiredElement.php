<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a description of the required Telegram Passport element that was requested by a service
 */
class PassportRequiredElement extends TdObject
{
    public const TYPE_NAME = 'passportRequiredElement';

    /**
     * List of Telegram Passport elements any of which is enough to provide
     *
     * @var PassportSuitableElement[]
     */
    protected array $suitableElements;

    public function __construct(array $suitableElements)
    {
        $this->suitableElements = $suitableElements;
    }

    public static function fromArray(array $array): PassportRequiredElement
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['suitable_elements']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->suitableElements),
        ];
    }

    public function getSuitableElements(): array
    {
        return $this->suitableElements;
    }
}
