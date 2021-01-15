<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a list of chats located nearby.
 */
class ChatsNearby extends TdObject
{
    public const TYPE_NAME = 'chatsNearby';

    /**
     * List of users nearby.
     *
     * @var ChatNearby[]
     */
    protected array $usersNearby;

    /**
     * List of location-based supergroups nearby.
     *
     * @var ChatNearby[]
     */
    protected array $supergroupsNearby;

    public function __construct(array $usersNearby, array $supergroupsNearby)
    {
        $this->usersNearby       = $usersNearby;
        $this->supergroupsNearby = $supergroupsNearby;
    }

    public static function fromArray(array $array): ChatsNearby
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['users_nearby']),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['supergroups_nearby']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->usersNearby),
            array_map(fn ($x) => $x->typeSerialize(), $this->supergroupsNearby),
        ];
    }

    public function getUsersNearby(): array
    {
        return $this->usersNearby;
    }

    public function getSupergroupsNearby(): array
    {
        return $this->supergroupsNearby;
    }
}
