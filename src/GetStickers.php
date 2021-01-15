<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns stickers from the installed sticker sets that correspond to a given emoji. If the emoji is not empty, favorite and recently used stickers may also be returned.
 */
class GetStickers extends TdFunction
{
    public const TYPE_NAME = 'getStickers';

    /**
     * String representation of emoji. If empty, returns all known installed stickers.
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

    public static function fromArray(array $array): GetStickers
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
