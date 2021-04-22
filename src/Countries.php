<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about countries
 */
class Countries extends TdObject
{
    public const TYPE_NAME = 'countries';

    /**
     * The list of countries
     *
     * @var CountryInfo[]
     */
    protected array $countries;

    public function __construct(array $countries)
    {
        $this->countries = $countries;
    }

    public static function fromArray(array $array): Countries
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['countries']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->countries),
        ];
    }

    public function getCountries(): array
    {
        return $this->countries;
    }
}
