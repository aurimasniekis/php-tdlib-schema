<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns users which can be mentioned in the supergroup.
 */
class SupergroupMembersFilterMention extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterMention';

    /**
     * Query to search for.
     */
    protected string $query;

    /**
     * If non-zero, the identifier of the current message thread.
     */
    protected int $messageThreadId;

    public function __construct(string $query, int $messageThreadId)
    {
        parent::__construct();

        $this->query           = $query;
        $this->messageThreadId = $messageThreadId;
    }

    public static function fromArray(array $array): SupergroupMembersFilterMention
    {
        return new static(
            $array['query'],
            $array['message_thread_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'query'             => $this->query,
            'message_thread_id' => $this->messageThreadId,
        ];
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }
}
