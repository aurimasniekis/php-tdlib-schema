<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Creates new chat filter. Returns information about the created chat filter
 */
class CreateChatFilter extends TdFunction
{
    public const TYPE_NAME = 'createChatFilter';

    /**
     * Chat filter
     *
     * @var ChatFilter
     */
    protected ChatFilter $filter;

    public function __construct(ChatFilter $filter)
    {
        $this->filter = $filter;
    }

    public static function fromArray(array $array): CreateChatFilter
    {
        return new static(
            TdSchemaRegistry::fromArray($array['filter']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'filter' => $this->filter->typeSerialize(),
        ];
    }

    public function getFilter(): ChatFilter
    {
        return $this->filter;
    }
}
