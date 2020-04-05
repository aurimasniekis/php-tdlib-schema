<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Related articles.
 */
class PageBlockRelatedArticles extends PageBlock
{
    public const TYPE_NAME = 'pageBlockRelatedArticles';

    /**
     * Block header.
     *
     * @var RichText
     */
    protected RichText $header;

    /**
     * List of related articles.
     *
     * @var PageBlockRelatedArticle[]
     */
    protected array $articles;

    public function __construct(RichText $header, array $articles)
    {
        parent::__construct();

        $this->header   = $header;
        $this->articles = $articles;
    }

    public static function fromArray(array $array): PageBlockRelatedArticles
    {
        return new static(
            TdSchemaRegistry::fromArray($array['header']),
            array_map(fn ($x) => PageBlockRelatedArticle::fromArray($x), $array['articles']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'header'          => $this->header->typeSerialize(),
            array_map(fn ($x) => $x->typeSerialize(), $this->articles),
        ];
    }

    public function getHeader(): RichText
    {
        return $this->header;
    }

    public function getArticles(): array
    {
        return $this->articles;
    }
}
