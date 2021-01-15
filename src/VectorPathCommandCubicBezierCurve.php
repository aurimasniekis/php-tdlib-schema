<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A cubic Bézier curve to a given point.
 */
class VectorPathCommandCubicBezierCurve extends VectorPathCommand
{
    public const TYPE_NAME = 'vectorPathCommandCubicBezierCurve';

    /**
     * The start control point of the curve.
     */
    protected Point $startControlPoint;

    /**
     * The end control point of the curve.
     */
    protected Point $endControlPoint;

    /**
     * The end point of the curve.
     */
    protected Point $endPoint;

    public function __construct(Point $startControlPoint, Point $endControlPoint, Point $endPoint)
    {
        parent::__construct();

        $this->startControlPoint = $startControlPoint;
        $this->endControlPoint   = $endControlPoint;
        $this->endPoint          = $endPoint;
    }

    public static function fromArray(array $array): VectorPathCommandCubicBezierCurve
    {
        return new static(
            TdSchemaRegistry::fromArray($array['start_control_point']),
            TdSchemaRegistry::fromArray($array['end_control_point']),
            TdSchemaRegistry::fromArray($array['end_point']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'start_control_point' => $this->startControlPoint->typeSerialize(),
            'end_control_point'   => $this->endControlPoint->typeSerialize(),
            'end_point'           => $this->endPoint->typeSerialize(),
        ];
    }

    public function getStartControlPoint(): Point
    {
        return $this->startControlPoint;
    }

    public function getEndControlPoint(): Point
    {
        return $this->endControlPoint;
    }

    public function getEndPoint(): Point
    {
        return $this->endPoint;
    }
}
