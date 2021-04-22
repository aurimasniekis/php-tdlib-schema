<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a video file.
 */
class Video extends TdObject
{
    public const TYPE_NAME = 'video';

    /**
     * Duration of the video, in seconds; as defined by the sender.
     */
    protected int $duration;

    /**
     * Video width; as defined by the sender.
     */
    protected int $width;

    /**
     * Video height; as defined by the sender.
     */
    protected int $height;

    /**
     * Original name of the file; as defined by the sender.
     */
    protected string $fileName;

    /**
     * MIME type of the file; as defined by the sender.
     */
    protected string $mimeType;

    /**
     * True, if stickers were added to the video. The list of corresponding sticker sets can be received using getAttachedStickerSets.
     */
    protected bool $hasStickers;

    /**
     * True, if the video should be tried to be streamed.
     */
    protected bool $supportsStreaming;

    /**
     * Video minithumbnail; may be null.
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * Video thumbnail in JPEG or MPEG4 format; as defined by the sender; may be null.
     */
    protected ?Thumbnail $thumbnail;

    /**
     * File containing the video.
     */
    protected File $video;

    public function __construct(
        int $duration,
        int $width,
        int $height,
        string $fileName,
        string $mimeType,
        bool $hasStickers,
        bool $supportsStreaming,
        ?Minithumbnail $minithumbnail,
        ?Thumbnail $thumbnail,
        File $video
    ) {
        $this->duration          = $duration;
        $this->width             = $width;
        $this->height            = $height;
        $this->fileName          = $fileName;
        $this->mimeType          = $mimeType;
        $this->hasStickers       = $hasStickers;
        $this->supportsStreaming = $supportsStreaming;
        $this->minithumbnail     = $minithumbnail;
        $this->thumbnail         = $thumbnail;
        $this->video             = $video;
    }

    public static function fromArray(array $array): Video
    {
        return new static(
            $array['duration'],
            $array['width'],
            $array['height'],
            $array['file_name'],
            $array['mime_type'],
            $array['has_stickers'],
            $array['supports_streaming'],
            (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            TdSchemaRegistry::fromArray($array['video']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'duration'           => $this->duration,
            'width'              => $this->width,
            'height'             => $this->height,
            'file_name'          => $this->fileName,
            'mime_type'          => $this->mimeType,
            'has_stickers'       => $this->hasStickers,
            'supports_streaming' => $this->supportsStreaming,
            'minithumbnail'      => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            'thumbnail'          => (isset($this->thumbnail) ? $this->thumbnail : null),
            'video'              => $this->video->typeSerialize(),
        ];
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getHasStickers(): bool
    {
        return $this->hasStickers;
    }

    public function getSupportsStreaming(): bool
    {
        return $this->supportsStreaming;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getVideo(): File
    {
        return $this->video;
    }
}
