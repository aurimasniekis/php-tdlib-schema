<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains part of the list of user photos.
 */
class UserProfilePhotos extends TdObject
{
    public const TYPE_NAME = 'userProfilePhotos';

    /**
     * Total number of user profile photos.
     */
    protected int $totalCount;

    /**
     * A list of photos.
     *
     * @var UserProfilePhoto[]
     */
    protected array $photos;

    public function __construct(int $totalCount, array $photos)
    {
        $this->totalCount = $totalCount;
        $this->photos     = $photos;
    }

    public static function fromArray(array $array): UserProfilePhotos
    {
        return new static(
            $array['total_count'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['photos']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'total_count'     => $this->totalCount,
            array_map(fn ($x) => $x->typeSerialize(), $this->photos),
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getPhotos(): array
    {
        return $this->photos;
    }
}
