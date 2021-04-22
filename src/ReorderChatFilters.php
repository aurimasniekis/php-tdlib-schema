<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the order of chat filters
 */
class ReorderChatFilters extends TdFunction
{
    public const TYPE_NAME = 'reorderChatFilters';

    /**
     * Identifiers of chat filters in the new correct order
     *
     * @var int[]
     */
    protected array $chatFilterIds;

    public function __construct(array $chatFilterIds)
    {
        $this->chatFilterIds = $chatFilterIds;
    }

    public static function fromArray(array $array): ReorderChatFilters
    {
        return new static(
            $array['chat_filter_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_filter_ids' => $this->chatFilterIds,
        ];
    }

    public function getChatFilterIds(): array
    {
        return $this->chatFilterIds;
    }
}
