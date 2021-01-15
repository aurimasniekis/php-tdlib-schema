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
     */
    protected int $duration;

    /**
     * Width of the animation.
     */
    protected int $width;

    /**
     * Height of the animation.
     */
    protected int $height;

    /**
     * Original name of the file; as defined by the sender.
     */
    protected string $fileName;

    /**
     * MIME type of the file, usually "image/gif" or "video/mp4".
     */
    protected string $mimeType;

    /**
     * True, if stickers were added to the animation. The list of corresponding sticker set can be received using getAttachedStickerSets.
     */
    protected bool $hasStickers;

    /**
     * Animation minithumbnail; may be null.
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * Animation thumbnail in JPEG or MPEG4 format; may be null.
     */
    protected ?Thumbnail $thumbnail;

    /**
     * File containing the animation.
     */
    protected File $animation;

    public function __construct(
        int $duration,
        int $width,
        int $height,
        string $fileName,
        string $mimeType,
        bool $hasStickers,
        ?Minithumbnail $minithumbnail,
        ?Thumbnail $thumbnail,
        File $animation
    ) {
        $this->duration      = $duration;
        $this->width         = $width;
        $this->height        = $height;
        $this->fileName      = $fileName;
        $this->mimeType      = $mimeType;
        $this->hasStickers   = $hasStickers;
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
            $array['has_stickers'],
            (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
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
            'has_stickers'  => $this->hasStickers,
            'minithumbnail' => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            'thumbnail'     => (isset($this->thumbnail) ? $this->thumbnail : null),
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

    public function getHasStickers(): bool
    {
        return $this->hasStickers;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getAnimation(): File
    {
        return $this->animation;
    }
}
