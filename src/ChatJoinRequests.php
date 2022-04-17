<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of requests to join a chat
 */
class ChatJoinRequests extends TdObject
{
    public const TYPE_NAME = 'chatJoinRequests';

    /**
     * Approximate total count of requests found
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * List of the requests
     *
     * @var ChatJoinRequest[]
     */
    protected array $requests;

    public function __construct(int $totalCount, array $requests)
    {
        $this->totalCount = $totalCount;
        $this->requests = $requests;
    }

    public static function fromArray(array $array): ChatJoinRequests
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['requests']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->requests),
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getRequests(): array
    {
        return $this->requests;
    }
}
