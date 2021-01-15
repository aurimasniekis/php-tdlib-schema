<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of frequently used chats. Supported only if the chat info database is enabled.
 */
class GetTopChats extends TdFunction
{
    public const TYPE_NAME = 'getTopChats';

    /**
     * Category of chats to be returned.
     *
     * @var TopChatCategory
     */
    protected TopChatCategory $category;

    /**
     * The maximum number of chats to be returned; up to 30.
     *
     * @var int
     */
    protected int $limit;

    public function __construct(TopChatCategory $category, int $limit)
    {
        $this->category = $category;
        $this->limit    = $limit;
    }

    public static function fromArray(array $array): GetTopChats
    {
        return new static(
            TdSchemaRegistry::fromArray($array['category']),
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'category' => $this->category->typeSerialize(),
            'limit'    => $this->limit,
        ];
    }

    public function getCategory(): TopChatCategory
    {
        return $this->category;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
