<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes an image in JPEG format.
 */
class PhotoSize extends TdObject
{
    public const TYPE_NAME = 'photoSize';

    /**
     * Image type (see https://core.telegram.org/constructor/photoSize).
     */
    protected string $type;

    /**
     * Information about the image file.
     */
    protected File $photo;

    /**
     * Image width.
     */
    protected int $width;

    /**
     * Image height.
     */
    protected int $height;

    /**
     * Sizes of progressive JPEG file prefixes, which can be used to preliminarily show the image.
     *
     * @var int[]
     */
    protected array $progressiveSizes;

    public function __construct(string $type, File $photo, int $width, int $height, array $progressiveSizes)
    {
        $this->type             = $type;
        $this->photo            = $photo;
        $this->width            = $width;
        $this->height           = $height;
        $this->progressiveSizes = $progressiveSizes;
    }

    public static function fromArray(array $array): PhotoSize
    {
        return new static(
            $array['type'],
            TdSchemaRegistry::fromArray($array['photo']),
            $array['width'],
            $array['height'],
            $array['progressive_sizes'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'type'              => $this->type,
            'photo'             => $this->photo->typeSerialize(),
            'width'             => $this->width,
            'height'            => $this->height,
            'progressive_sizes' => $this->progressiveSizes,
        ];
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getPhoto(): File
    {
        return $this->photo;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getProgressiveSizes(): array
    {
        return $this->progressiveSizes;
    }
}
