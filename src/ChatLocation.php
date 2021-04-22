<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a location to which a chat is connected.
 */
class ChatLocation extends TdObject
{
    public const TYPE_NAME = 'chatLocation';

    /**
     * The location.
     */
    protected Location $location;

    /**
     * Location address; 1-64 characters, as defined by the chat owner.
     */
    protected string $address;

    public function __construct(Location $location, string $address)
    {
        $this->location = $location;
        $this->address  = $address;
    }

    public static function fromArray(array $array): ChatLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            $array['address'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
            'address'  => $this->address,
        ];
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
}
