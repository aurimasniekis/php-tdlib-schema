<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a list of sticker sets.
 */
class StickerSets extends TdObject
{
    public const TYPE_NAME = 'stickerSets';

    /**
     * Approximate total number of sticker sets found.
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * List of sticker sets.
     *
     * @var StickerSetInfo[]
     */
    protected array $sets;

    public function __construct(int $totalCount, array $sets)
    {
        $this->totalCount = $totalCount;
        $this->sets       = $sets;
    }

    public static function fromArray(array $array): StickerSets
    {
        return new static(
            $array['total_count'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['sets']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'total_count'     => $this->totalCount,
            array_map(fn ($x) => $x->typeSerialize(), $this->sets),
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getSets(): array
    {
        return $this->sets;
    }
}
