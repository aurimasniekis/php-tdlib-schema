<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A table.
 */
class PageBlockTable extends PageBlock
{
    public const TYPE_NAME = 'pageBlockTable';

    /**
     * Table caption.
     */
    protected RichText $caption;

    /**
     * Table cells.
     *
     * @var PageBlockTableCell[][]
     */
    protected array $cells;

    /**
     * True, if the table is bordered.
     */
    protected bool $isBordered;

    /**
     * True, if the table is striped.
     */
    protected bool $isStriped;

    public function __construct(RichText $caption, array $cells, bool $isBordered, bool $isStriped)
    {
        parent::__construct();

        $this->caption    = $caption;
        $this->cells      = $cells;
        $this->isBordered = $isBordered;
        $this->isStriped  = $isStriped;
    }

    public static function fromArray(array $array): PageBlockTable
    {
        return new static(
            TdSchemaRegistry::fromArray($array['caption']),
            array_map(fn ($x) => array_map(fn ($y) => TdSchemaRegistry::fromArray($y), $x), $array['cells']),
            $array['is_bordered'],
            $array['is_striped'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'caption'         => $this->caption->typeSerialize(),
            array_map(fn ($x) => array_map(fn ($y) => $y->typeSerialize(), $x), $this->cells),
            'is_bordered'     => $this->isBordered,
            'is_striped'      => $this->isStriped,
        ];
    }

    public function getCaption(): RichText
    {
        return $this->caption;
    }

    public function getCells(): array
    {
        return $this->cells;
    }

    public function getIsBordered(): bool
    {
        return $this->isBordered;
    }

    public function getIsStriped(): bool
    {
        return $this->isStriped;
    }
}
