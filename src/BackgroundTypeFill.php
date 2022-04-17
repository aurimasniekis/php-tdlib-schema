<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A filled background
 */
class BackgroundTypeFill extends BackgroundType
{
    public const TYPE_NAME = 'backgroundTypeFill';

    /**
     * The background fill
     *
     * @var BackgroundFill
     */
    protected BackgroundFill $fill;

    public function __construct(BackgroundFill $fill)
    {
        parent::__construct();

        $this->fill = $fill;
    }

    public static function fromArray(array $array): BackgroundTypeFill
    {
        return new static(
            TdSchemaRegistry::fromArray($array['fill']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'fill' => $this->fill->typeSerialize(),
        ];
    }

    public function getFill(): BackgroundFill
    {
        return $this->fill;
    }
}
