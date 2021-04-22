<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Used to search for supergroup or channel members via a (string) query.
 */
class SupergroupMembersFilterSearch extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterSearch';

    /**
     * Query to search for.
     */
    protected string $query;

    public function __construct(string $query)
    {
        parent::__construct();

        $this->query = $query;
    }

    public static function fromArray(array $array): SupergroupMembersFilterSearch
    {
        return new static(
            $array['query'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
        ];
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}
