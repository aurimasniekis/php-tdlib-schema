<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A list of data blocks.
 */
class PageBlockList extends PageBlock
{
    public const TYPE_NAME = 'pageBlockList';

    /**
     * The items of the list.
     *
     * @var PageBlockListItem[]
     */
    protected array $items;

    public function __construct(array $items)
    {
        parent::__construct();

        $this->items = $items;
    }

    public static function fromArray(array $array): PageBlockList
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['items']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->items),
        ];
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
