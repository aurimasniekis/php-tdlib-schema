<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A media album.
 */
class PushMessageContentMediaAlbum extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentMediaAlbum';

    /**
     * Number of messages in the album.
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * True, if the album has at least one photo.
     *
     * @var bool
     */
    protected bool $hasPhotos;

    /**
     * True, if the album has at least one video.
     *
     * @var bool
     */
    protected bool $hasVideos;

    public function __construct(int $totalCount, bool $hasPhotos, bool $hasVideos)
    {
        parent::__construct();

        $this->totalCount = $totalCount;
        $this->hasPhotos  = $hasPhotos;
        $this->hasVideos  = $hasVideos;
    }

    public static function fromArray(array $array): PushMessageContentMediaAlbum
    {
        return new static(
            $array['total_count'],
            $array['has_photos'],
            $array['has_videos'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'has_photos'  => $this->hasPhotos,
            'has_videos'  => $this->hasVideos,
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getHasPhotos(): bool
    {
        return $this->hasPhotos;
    }

    public function getHasVideos(): bool
    {
        return $this->hasVideos;
    }
}
