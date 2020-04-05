<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Some data of a user has changed. This update is guaranteed to come before the user identifier is returned to the client.
 */
class UpdateUser extends Update
{
    public const TYPE_NAME = 'updateUser';

    /**
     * New data about the user.
     *
     * @var User
     */
    protected User $user;

    public function __construct(User $user)
    {
        parent::__construct();

        $this->user = $user;
    }

    public static function fromArray(array $array): UpdateUser
    {
        return new static(
            TdSchemaRegistry::fromArray($array['user']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user'  => $this->user->typeSerialize(),
        ];
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
