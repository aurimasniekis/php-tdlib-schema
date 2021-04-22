<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a list of chats.
 */
class Chats extends TdObject
{
    public const TYPE_NAME = 'chats';

    /**
     * Approximate total count of chats found.
     */
    protected int $totalCount;

    /**
     * List of chat identifiers.
     *
     * @var int[]
     */
    protected array $chatIds;

    public function __construct(int $totalCount, array $chatIds)
    {
        $this->totalCount = $totalCount;
        $this->chatIds    = $chatIds;
    }

    public static function fromArray(array $array): Chats
    {
        return new static(
            $array['total_count'],
            $array['chat_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'chat_ids'    => $this->chatIds,
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }
}
