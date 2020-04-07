<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * List of users nearby has changed. The update is sent only 60 seconds after a successful searchChatsNearby request.
 */
class UpdateUsersNearby extends Update
{
    public const TYPE_NAME = 'updateUsersNearby';

    /**
     * The new list of users nearby.
     *
     * @var ChatNearby[]
     */
    protected array $usersNearby;

    public function __construct(array $usersNearby)
    {
        parent::__construct();

        $this->usersNearby = $usersNearby;
    }

    public static function fromArray(array $array): UpdateUsersNearby
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['usersNearby']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->usersNearby),
        ];
    }

    public function getUsersNearby(): array
    {
        return $this->usersNearby;
    }
}
