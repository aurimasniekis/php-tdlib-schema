<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes existing chat filter.
 */
class DeleteChatFilter extends TdFunction
{
    public const TYPE_NAME = 'deleteChatFilter';

    /**
     * Chat filter identifier.
     */
    protected int $chatFilterId;

    public function __construct(int $chatFilterId)
    {
        $this->chatFilterId = $chatFilterId;
    }

    public static function fromArray(array $array): DeleteChatFilter
    {
        return new static(
            $array['chat_filter_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_filter_id' => $this->chatFilterId,
        ];
    }

    public function getChatFilterId(): int
    {
        return $this->chatFilterId;
    }
}
