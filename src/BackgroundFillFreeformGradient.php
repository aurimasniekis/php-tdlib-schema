<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a freeform gradient fill of a background
 */
class BackgroundFillFreeformGradient extends BackgroundFill
{
    public const TYPE_NAME = 'backgroundFillFreeformGradient';

    /**
     * A list of 3 or 4 colors of the freeform gradients in the RGB24 format
     *
     * @var int[]
     */
    protected array $colors;

    public function __construct(array $colors)
    {
        parent::__construct();

        $this->colors = $colors;
    }

    public static function fromArray(array $array): BackgroundFillFreeformGradient
    {
        return new static(
            $array['colors'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'colors' => $this->colors,
        ];
    }

    public function getColors(): array
    {
        return $this->colors;
    }
}
