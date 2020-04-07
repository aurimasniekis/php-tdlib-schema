<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An embedded post.
 */
class PageBlockEmbeddedPost extends PageBlock
{
    public const TYPE_NAME = 'pageBlockEmbeddedPost';

    /**
     * Web page URL.
     *
     * @var string
     */
    protected string $url;

    /**
     * Post author.
     *
     * @var string
     */
    protected string $author;

    /**
     * Post author photo; may be null.
     *
     * @var Photo|null
     */
    protected ?Photo $authorPhoto;

    /**
     * Point in time (Unix timestamp) when the post was created; 0 if unknown.
     *
     * @var int
     */
    protected int $date;

    /**
     * Post content.
     *
     * @var PageBlock[]
     */
    protected array $pageBlocks;

    /**
     * Post caption.
     *
     * @var PageBlockCaption
     */
    protected PageBlockCaption $caption;

    public function __construct(string $url, string $author, ?Photo $authorPhoto, int $date, array $pageBlocks, PageBlockCaption $caption)
    {
        parent::__construct();

        $this->url         = $url;
        $this->author      = $author;
        $this->authorPhoto = $authorPhoto;
        $this->date        = $date;
        $this->pageBlocks  = $pageBlocks;
        $this->caption     = $caption;
    }

    public static function fromArray(array $array): PageBlockEmbeddedPost
    {
        return new static(
            $array['url'],
            $array['author'],
            (isset($array['author_photo']) ? TdSchemaRegistry::fromArray($array['author_photo']) : null),
            $array['date'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['pageBlocks']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'url'             => $this->url,
            'author'          => $this->author,
            'author_photo'    => (isset($this->authorPhoto) ? $this->authorPhoto : null),
            'date'            => $this->date,
            array_map(fn ($x) => $x->typeSerialize(), $this->pageBlocks),
            'caption'         => $this->caption->typeSerialize(),
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getAuthorPhoto(): ?Photo
    {
        return $this->authorPhoto;
    }

    public function getDate(): int
    {
        return $this->date;
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
