<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a solid fill of a background.
 */
class BackgroundFillSolid extends BackgroundFill
{
    public const TYPE_NAME = 'backgroundFillSolid';

    /**
     * A color of the background in the RGB24 format.
     */
    protected int $color;

    public function __construct(int $color)
    {
        parent::__construct();

        $this->color = $color;
    }

    public static function fromArray(array $array): BackgroundFillSolid
    {
        return new static(
            $array['color'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'color' => $this->color,
        ];
    }

    public function getColor(): int
    {
        return $this->color;
    }
}
