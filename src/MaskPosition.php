<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Position on a photo where a mask should be placed.
 */
class MaskPosition extends TdObject
{
    public const TYPE_NAME = 'maskPosition';

    /**
     * Part of the face, relative to which the mask should be placed.
     */
    protected MaskPoint $point;

    /**
     * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. (For example, -1.0 will place the mask just to the left of the default mask position).
     */
    protected float $xShift;

    /**
     * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. (For example, 1.0 will place the mask just below the default mask position).
     */
    protected float $yShift;

    /**
     * Mask scaling coefficient. (For example, 2.0 means a doubled size).
     */
    protected float $scale;

    public function __construct(MaskPoint $point, float $xShift, float $yShift, float $scale)
    {
        $this->point  = $point;
        $this->xShift = $xShift;
        $this->yShift = $yShift;
        $this->scale  = $scale;
    }

    public static function fromArray(array $array): MaskPosition
    {
        return new static(
            TdSchemaRegistry::fromArray($array['point']),
            $array['x_shift'],
            $array['y_shift'],
            $array['scale'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'point'   => $this->point->typeSerialize(),
            'x_shift' => $this->xShift,
            'y_shift' => $this->yShift,
            'scale'   => $this->scale,
        ];
    }

    public function getPoint(): MaskPoint
    {
        return $this->point;
    }

    public function getXShift(): float
    {
        return $this->xShift;
    }

    public function getYShift(): float
    {
        return $this->yShift;
    }

    public function getScale(): float
    {
        return $this->scale;
    }
}
