<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes an item of a list page block.
 */
class PageBlockListItem extends TdObject
{
    public const TYPE_NAME = 'pageBlockListItem';

    /**
     * Item label.
     *
     * @var string
     */
    protected string $label;

    /**
     * Item blocks.
     *
     * @var PageBlock[]
     */
    protected array $pageBlocks;

    public function __construct(string $label, array $pageBlocks)
    {
        $this->label      = $label;
        $this->pageBlocks = $pageBlocks;
    }

    public static function fromArray(array $array): PageBlockListItem
    {
        return new static(
            $array['label'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['pageBlocks']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'label'           => $this->label,
            array_map(fn ($x) => $x->typeSerialize(), $this->pageBlocks),
        ];
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getPageBlocks(): array
    {
        return $this->pageBlocks;
    }
}
