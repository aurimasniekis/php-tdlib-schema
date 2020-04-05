<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of backgrounds.
 */
class Backgrounds extends TdObject
{
    public const TYPE_NAME = 'backgrounds';

    /**
     * A list of backgrounds.
     *
     * @var Background[]
     */
    protected array $backgrounds;

    public function __construct(array $backgrounds)
    {
        $this->backgrounds = $backgrounds;
    }

    public static function fromArray(array $array): Backgrounds
    {
        return new static(
            array_map(fn ($x) => Background::fromArray($x), $array['backgrounds']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->backgrounds),
        ];
    }

    public function getBackgrounds(): array
    {
        return $this->backgrounds;
    }
}
