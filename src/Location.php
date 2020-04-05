<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a location on planet Earth.
 */
class Location extends TdObject
{
    public const TYPE_NAME = 'location';

    /**
     * Latitude of the location in degrees; as defined by the sender.
     *
     * @var float
     */
    protected float $latitude;

    /**
     * Longitude of the location, in degrees; as defined by the sender.
     *
     * @var float
     */
    protected float $longitude;

    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude  = $latitude;
        $this->longitude = $longitude;
    }

    public static function fromArray(array $array): Location
    {
        return new static(
            $array['latitude'],
            $array['longitude'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'latitude'  => $this->latitude,
            'longitude' => $this->longitude,
        ];
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }
}
