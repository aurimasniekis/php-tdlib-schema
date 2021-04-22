<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The author and publishing date of a page.
 */
class PageBlockAuthorDate extends PageBlock
{
    public const TYPE_NAME = 'pageBlockAuthorDate';

    /**
     * Author.
     */
    protected RichText $author;

    /**
     * Point in time (Unix timestamp) when the article was published; 0 if unknown.
     */
    protected int $publishDate;

    public function __construct(RichText $author, int $publishDate)
    {
        parent::__construct();

        $this->author      = $author;
        $this->publishDate = $publishDate;
    }

    public static function fromArray(array $array): PageBlockAuthorDate
    {
        return new static(
            TdSchemaRegistry::fromArray($array['author']),
            $array['publish_date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'author'       => $this->author->typeSerialize(),
            'publish_date' => $this->publishDate,
        ];
    }

    public function getAuthor(): RichText
    {
        return $this->author;
    }

    public function getPublishDate(): int
    {
        return $this->publishDate;
    }
}
