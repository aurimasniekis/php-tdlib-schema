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
     */
    protected int $totalCount;

    /**
     * True, if the album has at least one photo.
     */
    protected bool $hasPhotos;

    /**
     * True, if the album has at least one video.
     */
    protected bool $hasVideos;

    /**
     * True, if the album has at least one audio file.
     */
    protected bool $hasAudios;

    /**
     * True, if the album has at least one document.
     */
    protected bool $hasDocuments;

    public function __construct(int $totalCount, bool $hasPhotos, bool $hasVideos, bool $hasAudios, bool $hasDocuments)
    {
        parent::__construct();

        $this->totalCount   = $totalCount;
        $this->hasPhotos    = $hasPhotos;
        $this->hasVideos    = $hasVideos;
        $this->hasAudios    = $hasAudios;
        $this->hasDocuments = $hasDocuments;
    }

    public static function fromArray(array $array): PushMessageContentMediaAlbum
    {
        return new static(
            $array['total_count'],
            $array['has_photos'],
            $array['has_videos'],
            $array['has_audios'],
            $array['has_documents'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'total_count'   => $this->totalCount,
            'has_photos'    => $this->hasPhotos,
            'has_videos'    => $this->hasVideos,
            'has_audios'    => $this->hasAudios,
            'has_documents' => $this->hasDocuments,
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

    public function getHasAudios(): bool
    {
        return $this->hasAudios;
    }

    public function getHasDocuments(): bool
    {
        return $this->hasDocuments;
    }
}
