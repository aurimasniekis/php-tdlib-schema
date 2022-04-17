<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a chat filter by its identifier
 */
class GetChatFilter extends TdFunction
{
    public const TYPE_NAME = 'getChatFilter';

    /**
     * Chat filter identifier
     *
     * @var int
     */
    protected int $chatFilterId;

    public function __construct(int $chatFilterId)
    {
        $this->chatFilterId = $chatFilterId;
    }

    public static function fromArray(array $array): GetChatFilter
    {
        return new static(
            $array['chat_filter_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_filter_id' => $this->chatFilterId,
        ];
    }

    public function getChatFilterId(): int
    {
        return $this->chatFilterId;
    }
}
