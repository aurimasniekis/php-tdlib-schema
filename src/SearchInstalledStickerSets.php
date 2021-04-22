<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for installed sticker sets by looking for specified query in their title and name.
 */
class SearchInstalledStickerSets extends TdFunction
{
    public const TYPE_NAME = 'searchInstalledStickerSets';

    /**
     * Pass true to return mask sticker sets; pass false to return ordinary sticker sets.
     */
    protected bool $isMasks;

    /**
     * Query to search for.
     */
    protected string $query;

    /**
     * The maximum number of sticker sets to return.
     */
    protected int $limit;

    public function __construct(bool $isMasks, string $query, int $limit)
    {
        $this->isMasks = $isMasks;
        $this->query   = $query;
        $this->limit   = $limit;
    }

    public static function fromArray(array $array): SearchInstalledStickerSets
    {
        return new static(
            $array['is_masks'],
            $array['query'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'is_masks' => $this->isMasks,
            'query'    => $this->query,
            'limit'    => $this->limit,
        ];
    }

    public function getIsMasks(): bool
    {
        return $this->isMasks;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
