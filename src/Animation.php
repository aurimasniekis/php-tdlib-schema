<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes an animation file. The animation must be encoded in GIF or MPEG4 format.
 */
class Animation extends TdObject
{
    public const TYPE_NAME = 'animation';

    /**
     * Duration of the animation, in seconds; as defined by the sender.
     *
     * @var int
     */
    protected int $duration;

    /**
     * Width of the animation.
     *
     * @var int
     */
    protected int $width;

    /**
     * Height of the animation.
     *
     * @var int
     */
    protected int $height;

    /**
     * Original name of the file; as defined by the sender.
     *
     * @var string
     */
    protected string $fileName;

    /**
     * MIME type of the file, usually "image/gif" or "video/mp4".
     *
     * @var string
     */
    protected string $mimeType;

    /**
     * Animation minithumbnail; may be null.
     *
     * @var Minithumbnail|null
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * Animation thumbnail; may be null.
     *
     * @var PhotoSize|null
     */
    protected ?PhotoSize $thumbnail;

    /**
     * File containing the animation.
     *
     * @var File
     */
    protected File $animation;

    public function __construct(
        int $duration,
        int $width,
        int $height,
        string $fileName,
        string $mimeType,
        ?Minithumbnail $minithumbnail,
        ?PhotoSize $thumbnail,
        File $animation
    ) {
        $this->duration      = $duration;
        $this->width         = $width;
        $this->height        = $height;
        $this->fileName      = $fileName;
        $this->mimeType      = $mimeType;
        $this->minithumbnail = $minithumbnail;
        $this->thumbnail     = $thumbnail;
        $this->animation     = $animation;
    }

    public static function fromArray(array $array): Animation
    {
        return new static(
            $array['duration'],
            $array['width'],
            $array['height'],
            $array['file_name'],
            $array['mime_type'],
            (null !== $array['minithumbnail'] ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            (null !== $array['thumbnail'] ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            TdSchemaRegistry::fromArray($array['animation']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'duration'      => $this->duration,
            'width'         => $this->width,
            'height'        => $this->height,
            'file_name'     => $this->fileName,
            'mime_type'     => $this->mimeType,
            'minithumbnail' => (null !== $this->minithumbnail ? $this->minithumbnail : null),
            'thumbnail'     => (null !== $this->thumbnail ? $this->thumbnail : null),
            'animation'     => $this->animation->typeSerialize(),
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

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }

    public function getAnimation(): File
    {
        return $this->animation;
    }
}
