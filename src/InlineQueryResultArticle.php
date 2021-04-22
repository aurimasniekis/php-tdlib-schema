<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a link to an article or web page.
 */
class InlineQueryResultArticle extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultArticle';

    /**
     * Unique identifier of the query result.
     */
    protected string $id;

    /**
     * URL of the result, if it exists.
     */
    protected string $url;

    /**
     * True, if the URL must be not shown.
     */
    protected bool $hideUrl;

    /**
     * Title of the result.
     */
    protected string $title;

    /**
     * A short description of the result.
     */
    protected string $description;

    /**
     * Result thumbnail in JPEG format; may be null.
     */
    protected ?Thumbnail $thumbnail;

    public function __construct(
        string $id,
        string $url,
        bool $hideUrl,
        string $title,
        string $description,
        ?Thumbnail $thumbnail
    ) {
        parent::__construct();

        $this->id          = $id;
        $this->url         = $url;
        $this->hideUrl     = $hideUrl;
        $this->title       = $title;
        $this->description = $description;
        $this->thumbnail   = $thumbnail;
    }

    public static function fromArray(array $array): InlineQueryResultArticle
    {
        return new static(
            $array['id'],
            $array['url'],
            $array['hide_url'],
            $array['title'],
            $array['description'],
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'url'         => $this->url,
            'hide_url'    => $this->hideUrl,
            'title'       => $this->title,
            'description' => $this->description,
            'thumbnail'   => (isset($this->thumbnail) ? $this->thumbnail : null),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getHideUrl(): bool
    {
        return $this->hideUrl;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }
}
