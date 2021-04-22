<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a video note. The video must be equal in width and height, cropped to a circle, and stored in MPEG4 format.
 */
class VideoNote extends TdObject
{
    public const TYPE_NAME = 'videoNote';

    /**
     * Duration of the video, in seconds; as defined by the sender.
     */
    protected int $duration;

    /**
     * Video width and height; as defined by the sender.
     */
    protected int $length;

    /**
     * Video minithumbnail; may be null.
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * Video thumbnail in JPEG format; as defined by the sender; may be null.
     */
    protected ?Thumbnail $thumbnail;

    /**
     * File containing the video.
     */
    protected File $video;

    public function __construct(
        int $duration,
        int $length,
        ?Minithumbnail $minithumbnail,
        ?Thumbnail $thumbnail,
        File $video
    ) {
        $this->duration      = $duration;
        $this->length        = $length;
        $this->minithumbnail = $minithumbnail;
        $this->thumbnail     = $thumbnail;
        $this->video         = $video;
    }

    public static function fromArray(array $array): VideoNote
    {
        return new static(
            $array['duration'],
            $array['length'],
            (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            TdSchemaRegistry::fromArray($array['video']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'duration'      => $this->duration,
            'length'        => $this->length,
            'minithumbnail' => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            'thumbnail'     => (isset($this->thumbnail) ? $this->thumbnail : null),
            'video'         => $this->video->typeSerialize(),
        ];
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getLength(): int
    {
        return $this->length;
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
