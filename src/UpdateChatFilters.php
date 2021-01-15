<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The list of chat filters or a chat filter has changed.
 */
class UpdateChatFilters extends Update
{
    public const TYPE_NAME = 'updateChatFilters';

    /**
     * The new list of chat filters.
     *
     * @var ChatFilterInfo[]
     */
    protected array $chatFilters;

    public function __construct(array $chatFilters)
    {
        parent::__construct();

        $this->chatFilters = $chatFilters;
    }

    public static function fromArray(array $array): UpdateChatFilters
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
