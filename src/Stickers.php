<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a list of stickers.
 */
class Stickers extends TdObject
{
    public const TYPE_NAME = 'stickers';

    /**
     * List of stickers.
     *
     * @var Sticker[]
     */
    protected array $stickers;

    public function __construct(array $stickers)
    {
        $this->stickers = $stickers;
    }

    public static function fromArray(array $array): Stickers
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['stickers']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->stickers),
        ];
    }

    public function getStickers(): array
    {
        return $this->stickers;
    }
}
