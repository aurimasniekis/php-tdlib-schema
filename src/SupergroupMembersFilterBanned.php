<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns users banned from the supergroup or channel; can be used only by administrators.
 */
class SupergroupMembersFilterBanned extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterBanned';

    /**
     * Query to search for.
     *
     * @var string
     */
    protected string $query;

    public function __construct(string $query)
    {
        parent::__construct();

        $this->query = $query;
    }

    public static function fromArray(array $array): SupergroupMembersFilterBanned
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
