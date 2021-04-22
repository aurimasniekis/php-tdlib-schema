<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for a sticker set by its name.
 */
class SearchStickerSet extends TdFunction
{
    public const TYPE_NAME = 'searchStickerSet';

    /**
     * Name of the sticker set.
     */
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function fromArray(array $array): SearchStickerSet
    {
        return new static(
            $array['name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }
}
