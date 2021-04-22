<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of service actions taken by chat members and administrators in the last 48 hours. Available only for supergroups and channels. Requires administrator rights. Returns results in reverse chronological order (i. e., in order of decreasing event_id)
 */
class GetChatEventLog extends TdFunction
{
    public const TYPE_NAME = 'getChatEventLog';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Search query by which to filter events
     *
     * @var string
     */
    protected string $query;

    /**
     * Identifier of an event from which to return results. Use 0 to get results from the latest events
     *
     * @var string
     */
    protected string $fromEventId;

    /**
     * The maximum number of events to return; up to 100
     *
     * @var int
     */
    protected int $limit;

    /**
     * The types of events to return. By default, all types will be returned
     *
     * @var ChatEventLogFilters
     */
    protected ChatEventLogFilters $filters;

    /**
     * User identifiers by which to filter events. By default, events relating to all users will be returned
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(
        int $chatId,
        string $query,
        string $fromEventId,
        int $limit,
        ChatEventLogFilters $filters,
        array $userIds
    ) {
        $this->chatId = $chatId;
        $this->query = $query;
        $this->fromEventId = $fromEventId;
        $this->limit = $limit;
        $this->filters = $filters;
        $this->userIds = $userIds;
    }

    public static function fromArray(array $array): GetChatEventLog
    {
        return new static(
            $array['chat_id'],
            $array['query'],
            $array['from_event_id'],
            $array['limit'],
            TdSchemaRegistry::fromArray($array['filters']),
            $array['user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'query' => $this->query,
            'from_event_id' => $this->fromEventId,
            'limit' => $this->limit,
            'filters' => $this->filters->typeSerialize(),
            'user_ids' => $this->userIds,
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

    public function getFromEventId(): string
    {
        return $this->fromEventId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getFilters(): ChatEventLogFilters
    {
        return $this->filters;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }
}
