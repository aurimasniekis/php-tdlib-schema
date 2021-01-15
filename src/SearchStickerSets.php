<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for ordinary sticker sets by looking for specified query in their title and name. Excludes installed sticker sets from the results.
 */
class SearchStickerSets extends TdFunction
{
    public const TYPE_NAME = 'searchStickerSets';

    /**
     * Query to search for.
     *
     * @var string
     */
    protected string $query;

    public function __construct(string $query)
    {
        $this->query = $query;
    }

    public static function fromArray(array $array): SearchStickerSets
    {
        return new static(
            $array['query'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
        ];
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}
