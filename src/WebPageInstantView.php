<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes an instant view page for a web page
 */
class WebPageInstantView extends TdObject
{
    public const TYPE_NAME = 'webPageInstantView';

    /**
     * Content of the web page
     *
     * @var PageBlock[]
     */
    protected array $pageBlocks;

    /**
     * Number of the instant view views; 0 if unknown
     *
     * @var int
     */
    protected int $viewCount;

    /**
     * Version of the instant view; currently, can be 1 or 2
     *
     * @var int
     */
    protected int $version;

    /**
     * True, if the instant view must be shown from right to left
     *
     * @var bool
     */
    protected bool $isRtl;

    /**
     * True, if the instant view contains the full page. A network request might be needed to get the full web page instant view
     *
     * @var bool
     */
    protected bool $isFull;

    /**
     * An internal link to be opened to leave feedback about the instant view
     *
     * @var InternalLinkType
     */
    protected InternalLinkType $feedbackLink;

    public function __construct(
        array $pageBlocks,
        int $viewCount,
        int $version,
        bool $isRtl,
        bool $isFull,
        InternalLinkType $feedbackLink
    ) {
        $this->pageBlocks = $pageBlocks;
        $this->viewCount = $viewCount;
        $this->version = $version;
        $this->isRtl = $isRtl;
        $this->isFull = $isFull;
        $this->feedbackLink = $feedbackLink;
    }

    public static function fromArray(array $array): WebPageInstantView
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['page_blocks']),
            $array['view_count'],
            $array['version'],
            $array['is_rtl'],
            $array['is_full'],
            TdSchemaRegistry::fromArray($array['feedback_link']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->pageBlocks),
            'view_count' => $this->viewCount,
            'version' => $this->version,
            'is_rtl' => $this->isRtl,
            'is_full' => $this->isFull,
            'feedback_link' => $this->feedbackLink->typeSerialize(),
        ];
    }

    public function getPageBlocks(): array
    {
        return $this->pageBlocks;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function getIsRtl(): bool
    {
        return $this->isRtl;
    }

    public function getIsFull(): bool
    {
        return $this->isFull;
    }

    public function getFeedbackLink(): InternalLinkType
    {
        return $this->feedbackLink;
    }
}
