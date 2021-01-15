<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for recently used hashtags by their prefix.
 */
class SearchHashtags extends TdFunction
{
    public const TYPE_NAME = 'searchHashtags';

    /**
     * Hashtag prefix to search for.
     */
    protected string $prefix;

    /**
     * The maximum number of hashtags to be returned.
     */
    protected int $limit;

    public function __construct(string $prefix, int $limit)
    {
        $this->prefix = $prefix;
        $this->limit  = $limit;
    }

    public static function fromArray(array $array): SearchHashtags
    {
        return new static(
            $array['prefix'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'prefix' => $this->prefix,
            'limit'  => $this->limit,
        ];
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
