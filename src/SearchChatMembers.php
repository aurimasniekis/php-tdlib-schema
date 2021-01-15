<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for a specified query in the first name, last name and username of the members of a specified chat. Requires administrator rights in channels.
 */
class SearchChatMembers extends TdFunction
{
    public const TYPE_NAME = 'searchChatMembers';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Query to search for.
     *
     * @var string
     */
    protected string $query;

    /**
     * The maximum number of users to be returned.
     *
     * @var int
     */
    protected int $limit;

    /**
     * The type of users to return. By default, chatMembersFilterMembers.
     *
     * @var ChatMembersFilter
     */
    protected ChatMembersFilter $filter;

    public function __construct(int $chatId, string $query, int $limit, ChatMembersFilter $filter)
    {
        $this->chatId = $chatId;
        $this->query  = $query;
        $this->limit  = $limit;
        $this->filter = $filter;
    }

    public static function fromArray(array $array): SearchChatMembers
    {
        return new static(
            $array['chat_id'],
            $array['query'],
            $array['limit'],
            TdSchemaRegistry::fromArray($array['filter']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'query'   => $this->query,
            'limit'   => $this->limit,
            'filter'  => $this->filter->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getFilter(): ChatMembersFilter
    {
        return $this->filter;
    }
}
