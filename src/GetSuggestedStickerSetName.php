<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a suggested name for a new sticker set with a given title
 */
class GetSuggestedStickerSetName extends TdFunction
{
    public const TYPE_NAME = 'getSuggestedStickerSetName';

    /**
     * Sticker set title; 1-64 characters
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public static function fromArray(array $array): GetSuggestedStickerSetName
    {
        return new static(
            $array['title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
