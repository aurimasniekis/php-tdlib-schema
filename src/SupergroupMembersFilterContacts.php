<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns contacts of the user, which are members of the supergroup or channel
 */
class SupergroupMembersFilterContacts extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterContacts';

    /**
     * Query to search for
     *
     * @var string
     */
    protected string $query;

    public function __construct(string $query)
    {
        parent::__construct();

        $this->query = $query;
    }

    public static function fromArray(array $array): SupergroupMembersFilterContacts
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
