<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of recommended chat filters.
 */
class RecommendedChatFilters extends TdObject
{
    public const TYPE_NAME = 'recommendedChatFilters';

    /**
     * List of recommended chat filters.
     *
     * @var RecommendedChatFilter[]
     */
    protected array $chatFilters;

    public function __construct(array $chatFilters)
    {
        $this->chatFilters = $chatFilters;
    }

    public static function fromArray(array $array): RecommendedChatFilters
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['chatFilters']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->chatFilters),
        ];
    }

    public function getChatFilters(): array
    {
        return $this->chatFilters;
    }
}
