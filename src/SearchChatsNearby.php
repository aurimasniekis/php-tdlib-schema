<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of users and location-based supergroups nearby. The list of users nearby will be updated for 60 seconds after the request by the updates updateUsersNearby. The request must be sent again every 25 seconds with adjusted location to not miss new chats
 */
class SearchChatsNearby extends TdFunction
{
    public const TYPE_NAME = 'searchChatsNearby';

    /**
     * Current user location
     *
     * @var Location
     */
    protected Location $location;

    public function __construct(Location $location)
    {
        $this->location = $location;
    }

    public static function fromArray(array $array): SearchChatsNearby
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
        ];
    }

    public function getLocation(): Location
    {
        return $this->location;
    }
}
