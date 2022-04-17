<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a recommended chat filter
 */
class RecommendedChatFilter extends TdObject
{
    public const TYPE_NAME = 'recommendedChatFilter';

    /**
     * The chat filter
     *
     * @var ChatFilter
     */
    protected ChatFilter $filter;

    /**
     * Chat filter description
     *
     * @var string
     */
    protected string $description;

    public function __construct(ChatFilter $filter, string $description)
    {
        $this->filter = $filter;
        $this->description = $description;
    }

    public static function fromArray(array $array): RecommendedChatFilter
    {
        return new static(
            TdSchemaRegistry::fromArray($array['filter']),
            $array['description'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'filter' => $this->filter->typeSerialize(),
            'description' => $this->description,
        ];
    }

    public function getFilter(): ChatFilter
    {
        return $this->filter;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
