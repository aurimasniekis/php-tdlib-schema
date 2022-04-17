<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A wallpaper in JPEG format
 */
class BackgroundTypeWallpaper extends BackgroundType
{
    public const TYPE_NAME = 'backgroundTypeWallpaper';

    /**
     * True, if the wallpaper must be downscaled to fit in 450x450 square and then box-blurred with radius 12
     *
     * @var bool
     */
    protected bool $isBlurred;

    /**
     * True, if the background needs to be slightly moved when device is tilted
     *
     * @var bool
     */
    protected bool $isMoving;

    public function __construct(bool $isBlurred, bool $isMoving)
    {
        parent::__construct();

        $this->isBlurred = $isBlurred;
        $this->isMoving = $isMoving;
    }

    public static function fromArray(array $array): BackgroundTypeWallpaper
    {
        return new static(
            $array['is_blurred'],
            $array['is_moving'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_blurred' => $this->isBlurred,
            'is_moving' => $this->isMoving,
        ];
    }

    public function getIsBlurred(): bool
    {
        return $this->isBlurred;
    }

    public function getIsMoving(): bool
    {
        return $this->isMoving;
    }
}
