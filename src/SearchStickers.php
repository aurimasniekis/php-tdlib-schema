<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for stickers from public sticker sets that correspond to a given emoji.
 */
class SearchStickers extends TdFunction
{
    public const TYPE_NAME = 'searchStickers';

    /**
     * String representation of emoji; must be non-empty.
     *
     * @var string
     */
    protected string $emoji;

    /**
     * The maximum number of stickers to be returned.
     *
     * @var int
     */
    protected int $limit;

    public function __construct(string $emoji, int $limit)
    {
        $this->emoji = $emoji;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): SearchStickers
    {
        return new static(
            $array['emoji'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emoji' => $this->emoji,
            'limit' => $this->limit,
        ];
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
