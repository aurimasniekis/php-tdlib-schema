<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Removes users from the contact list
 */
class RemoveContacts extends TdFunction
{
    public const TYPE_NAME = 'removeContacts';

    /**
     * Identifiers of users to be deleted
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(array $userIds)
    {
        $this->userIds = $userIds;
    }

    public static function fromArray(array $array): RemoveContacts
    {
        return new static(
            $array['user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_ids' => $this->userIds,
        ];
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }
}
