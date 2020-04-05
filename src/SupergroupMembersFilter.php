<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Specifies the kind of chat members to return in getSupergroupMembers.
 */
class SupergroupMembersFilter extends TdObject
{
    public const TYPE_NAME = 'SupergroupMembersFilter';

    public function __construct()
    {
    }

    public static function fromArray(array $array): SupergroupMembersFilter
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
