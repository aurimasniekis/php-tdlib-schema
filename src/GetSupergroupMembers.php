<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about members or banned users in a supergroup or channel. Can be used only if SupergroupFullInfo.can_get_members == true; additionally, administrator privileges may be required for some filters.
 */
class GetSupergroupMembers extends TdFunction
{
    public const TYPE_NAME = 'getSupergroupMembers';

    /**
     * Identifier of the supergroup or channel.
     */
    protected int $supergroupId;

    /**
     * The type of users to return. By default, supergroupMembersFilterRecent.
     */
    protected SupergroupMembersFilter $filter;

    /**
     * Number of users to skip.
     */
    protected int $offset;

    /**
     * The maximum number of users be returned; up to 200.
     */
    protected int $limit;

    public function __construct(int $supergroupId, SupergroupMembersFilter $filter, int $offset, int $limit)
    {
        $this->supergroupId = $supergroupId;
        $this->filter       = $filter;
        $this->offset       = $offset;
        $this->limit        = $limit;
    }

    public static function fromArray(array $array): GetSupergroupMembers
    {
        return new static(
            $array['supergroup_id'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'filter'        => $this->filter->typeSerialize(),
            'offset'        => $this->offset,
            'limit'         => $this->limit,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getFilter(): SupergroupMembersFilter
    {
        return $this->filter;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
