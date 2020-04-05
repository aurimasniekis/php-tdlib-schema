<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A collapsible block.
 */
class PageBlockDetails extends PageBlock
{
    public const TYPE_NAME = 'pageBlockDetails';

    /**
     * Always visible heading for the block.
     *
     * @var RichText
     */
    protected RichText $header;

    /**
     * Block contents.
     *
     * @var PageBlock[]
     */
    protected array $pageBlocks;

    /**
     * True, if the block is open by default.
     *
     * @var bool
     */
    protected bool $isOpen;

    public function __construct(RichText $header, array $pageBlocks, bool $isOpen)
    {
        parent::__construct();

        $this->header     = $header;
        $this->pageBlocks = $pageBlocks;
        $this->isOpen     = $isOpen;
    }

    public static function fromArray(array $array): PageBlockDetails
    {
        return new static(
            TdSchemaRegistry::fromArray($array['header']),
            array_map(fn ($x) => PageBlock::fromArray($x), $array['pageBlocks']),
            $array['is_open'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'header'          => $this->header->typeSerialize(),
            array_map(fn ($x) => $x->typeSerialize(), $this->pageBlocks),
            'is_open'         => $this->isOpen,
        ];
    }

    public function getHeader(): RichText
    {
        return $this->header;
    }

    public function getPageBlocks(): array
    {
        return $this->pageBlocks;
    }

    public function getIsOpen(): bool
    {
        return $this->isOpen;
    }
}
