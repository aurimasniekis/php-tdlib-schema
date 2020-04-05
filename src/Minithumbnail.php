<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Thumbnail image of a very poor quality and low resolution.
 */
class Minithumbnail extends TdObject
{
    public const TYPE_NAME = 'minithumbnail';

    /**
     * Thumbnail width, usually doesn't exceed 40.
     *
     * @var int
     */
    protected int $width;

    /**
     * Thumbnail height, usually doesn't exceed 40.
     *
     * @var int
     */
    protected int $height;

    /**
     * The thumbnail in JPEG format.
     *
     * @var string
     */
    protected string $data;

    public function __construct(int $width, int $height, string $data)
    {
        $this->width  = $width;
        $this->height = $height;
        $this->data   = $data;
    }

    public static function fromArray(array $array): Minithumbnail
    {
        return new static(
            $array['width'],
            $array['height'],
            $array['data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'width'  => $this->width,
            'height' => $this->height,
            'data'   => $this->data,
        ];
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getData(): string
    {
        return $this->data;
    }
}
