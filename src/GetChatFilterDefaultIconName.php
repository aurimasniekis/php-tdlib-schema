<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns default icon name for a filter. Can be called synchronously.
 */
class GetChatFilterDefaultIconName extends TdFunction
{
    public const TYPE_NAME = 'getChatFilterDefaultIconName';

    /**
     * Chat filter.
     */
    protected ChatFilter $filter;

    public function __construct(ChatFilter $filter)
    {
        $this->filter = $filter;
    }

    public static function fromArray(array $array): GetChatFilterDefaultIconName
    {
        return new static(
            TdSchemaRegistry::fromArray($array['filter']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'filter' => $this->filter->typeSerialize(),
        ];
    }

    public function getFilter(): ChatFilter
    {
        return $this->filter;
    }
}
