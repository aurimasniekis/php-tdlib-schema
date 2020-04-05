<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A slideshow.
 */
class PageBlockSlideshow extends PageBlock
{
    public const TYPE_NAME = 'pageBlockSlideshow';

    /**
     * Slideshow item contents.
     *
     * @var PageBlock[]
     */
    protected array $pageBlocks;

    /**
     * Block caption.
     *
     * @var PageBlockCaption
     */
    protected PageBlockCaption $caption;

    public function __construct(array $pageBlocks, PageBlockCaption $caption)
    {
        parent::__construct();

        $this->pageBlocks = $pageBlocks;
        $this->caption    = $caption;
    }

    public static function fromArray(array $array): PageBlockSlideshow
    {
        return new static(
            array_map(fn ($x) => PageBlock::fromArray($x), $array['pageBlocks']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->pageBlocks),
            'caption'         => $this->caption->typeSerialize(),
        ];
    }

    public function getPageBlocks(): array
    {
        return $this->pageBlocks;
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }
}
