<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a related article
 */
class PageBlockRelatedArticle extends TdObject
{
    public const TYPE_NAME = 'pageBlockRelatedArticle';

    /**
     * Related article URL
     *
     * @var string
     */
    protected string $url;

    /**
     * Article title; may be empty
     *
     * @var string
     */
    protected string $title;

    /**
     * Article description; may be empty
     *
     * @var string
     */
    protected string $description;

    /**
     * Article photo; may be null
     *
     * @var Photo|null
     */
    protected ?Photo $photo;

    /**
     * Article author; may be empty
     *
     * @var string
     */
    protected string $author;

    /**
     * Point in time (Unix timestamp) when the article was published; 0 if unknown
     *
     * @var int
     */
    protected int $publishDate;

    public function __construct(
        string $url,
        string $title,
        string $description,
        ?Photo $photo,
        string $author,
        int $publishDate
    ) {
        $this->url = $url;
        $this->title = $title;
        $this->description = $description;
        $this->photo = $photo;
        $this->author = $author;
        $this->publishDate = $publishDate;
    }

    public static function fromArray(array $array): PageBlockRelatedArticle
    {
        return new static(
            $array['url'],
            $array['title'],
            $array['description'],
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['author'],
            $array['publish_date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
            'title' => $this->title,
            'description' => $this->description,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'author' => $this->author,
            'publish_date' => $this->publishDate,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPublishDate(): int
    {
        return $this->publishDate;
    }
}
