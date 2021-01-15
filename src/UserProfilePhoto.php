<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains full information about a user profile photo.
 */
class UserProfilePhoto extends TdObject
{
    public const TYPE_NAME = 'userProfilePhoto';

    /**
     * Unique user profile photo identifier.
     *
     * @var string
     */
    protected string $id;

    /**
     * Point in time (Unix timestamp) when the photo has been added.
     *
     * @var int
     */
    protected int $addedDate;

    /**
     * Available variants of the user photo, in different sizes.
     *
     * @var PhotoSize[]
     */
    protected array $sizes;

    public function __construct(string $id, int $addedDate, array $sizes)
    {
        $this->id        = $id;
        $this->addedDate = $addedDate;
        $this->sizes     = $sizes;
    }

    public static function fromArray(array $array): UserProfilePhoto
    {
        return new static(
            $array['id'],
            $array['added_date'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['sizes']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'id'              => $this->id,
            'added_date'      => $this->addedDate,
            array_map(fn ($x) => $x->typeSerialize(), $this->sizes),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getAddedDate(): int
    {
        return $this->addedDate;
    }

    public function getSizes(): array
    {
        return $this->sizes;
    }
}
