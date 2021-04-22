<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user went online or offline
 */
class UpdateUserStatus extends Update
{
    public const TYPE_NAME = 'updateUserStatus';

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    /**
     * New status of the user
     *
     * @var UserStatus
     */
    protected UserStatus $status;

    public function __construct(int $userId, UserStatus $status)
    {
        parent::__construct();

        $this->userId = $userId;
        $this->status = $status;
    }

    public static function fromArray(array $array): UpdateUserStatus
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['status']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'status' => $this->status->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getStatus(): UserStatus
    {
        return $this->status;
    }
}
