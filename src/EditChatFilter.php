<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Edits existing chat filter. Returns information about the edited chat filter
 */
class EditChatFilter extends TdFunction
{
    public const TYPE_NAME = 'editChatFilter';

    /**
     * Chat filter identifier
     *
     * @var int
     */
    protected int $chatFilterId;

    /**
     * The edited chat filter
     *
     * @var ChatFilter
     */
    protected ChatFilter $filter;

    public function __construct(int $chatFilterId, ChatFilter $filter)
    {
        $this->chatFilterId = $chatFilterId;
        $this->filter = $filter;
    }

    public static function fromArray(array $array): EditChatFilter
    {
        return new static(
            $array['chat_filter_id'],
            TdSchemaRegistry::fromArray($array['filter']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_filter_id' => $this->chatFilterId,
            'filter' => $this->filter->typeSerialize(),
        ];
    }

    public function getChatFilterId(): int
    {
        return $this->chatFilterId;
    }

    public function getFilter(): ChatFilter
    {
        return $this->filter;
    }
}
