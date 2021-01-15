<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a gradient fill of a background.
 */
class BackgroundFillGradient extends BackgroundFill
{
    public const TYPE_NAME = 'backgroundFillGradient';

    /**
     * A top color of the background in the RGB24 format.
     */
    protected int $topColor;

    /**
     * A bottom color of the background in the RGB24 format.
     */
    protected int $bottomColor;

    /**
     * Clockwise rotation angle of the gradient, in degrees; 0-359. Should be always divisible by 45.
     */
    protected int $rotationAngle;

    public function __construct(int $topColor, int $bottomColor, int $rotationAngle)
    {
        parent::__construct();

        $this->topColor      = $topColor;
        $this->bottomColor   = $bottomColor;
        $this->rotationAngle = $rotationAngle;
    }

    public static function fromArray(array $array): BackgroundFillGradient
    {
        return new static(
            $array['top_color'],
            $array['bottom_color'],
            $array['rotation_angle'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'top_color'      => $this->topColor,
            'bottom_color'   => $this->bottomColor,
            'rotation_angle' => $this->rotationAngle,
        ];
    }

    public function getTopColor(): int
    {
        return $this->topColor;
    }

    public function getBottomColor(): int
    {
        return $this->bottomColor;
    }

    public function getRotationAngle(): int
    {
        return $this->rotationAngle;
    }
}
