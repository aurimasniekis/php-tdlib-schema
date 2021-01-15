<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a venue.
 */
class Venue extends TdObject
{
    public const TYPE_NAME = 'venue';

    /**
     * Venue location; as defined by the sender.
     *
     * @var Location
     */
    protected Location $location;

    /**
     * Venue name; as defined by the sender.
     *
     * @var string
     */
    protected string $title;

    /**
     * Venue address; as defined by the sender.
     *
     * @var string
     */
    protected string $address;

    /**
     * Provider of the venue database; as defined by the sender. Currently only "foursquare" needs to be supported.
     *
     * @var string
     */
    protected string $provider;

    /**
     * Identifier of the venue in the provider database; as defined by the sender.
     *
     * @var string
     */
    protected string $id;

    /**
     * Type of the venue in the provider database; as defined by the sender.
     *
     * @var string
     */
    protected string $type;

    public function __construct(Location $location, string $title, string $address, string $provider, string $id, string $type)
    {
        $this->location = $location;
        $this->title    = $title;
        $this->address  = $address;
        $this->provider = $provider;
        $this->id       = $id;
        $this->type     = $type;
    }

    public static function fromArray(array $array): Venue
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            $array['title'],
            $array['address'],
            $array['provider'],
            $array['id'],
            $array['type'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
            'title'    => $this->title,
            'address'  => $this->address,
            'provider' => $this->provider,
            'id'       => $this->id,
            'type'     => $this->type,
        ];
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
