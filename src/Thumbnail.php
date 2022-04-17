<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a thumbnail
 */
class Thumbnail extends TdObject
{
    public const TYPE_NAME = 'thumbnail';

    /**
     * Thumbnail format
     *
     * @var ThumbnailFormat
     */
    protected ThumbnailFormat $format;

    /**
     * Thumbnail width
     *
     * @var int
     */
    protected int $width;

    /**
     * Thumbnail height
     *
     * @var int
     */
    protected int $height;

    /**
     * The thumbnail
     *
     * @var File
     */
    protected File $file;

    public function __construct(ThumbnailFormat $format, int $width, int $height, File $file)
    {
        $this->format = $format;
        $this->width = $width;
        $this->height = $height;
        $this->file = $file;
    }

    public static function fromArray(array $array): Thumbnail
    {
        return new static(
            TdSchemaRegistry::fromArray($array['format']),
            $array['width'],
            $array['height'],
            TdSchemaRegistry::fromArray($array['file']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'format' => $this->format->typeSerialize(),
            'width' => $this->width,
            'height' => $this->height,
            'file' => $this->file->typeSerialize(),
        ];
    }

    public function getFormat(): ThumbnailFormat
    {
        return $this->format;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getFile(): File
    {
        return $this->file;
    }
}
