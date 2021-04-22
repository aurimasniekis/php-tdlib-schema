<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns full information about a user by their identifier.
 */
class GetUserFullInfo extends TdFunction
{
    public const TYPE_NAME = 'getUserFullInfo';

    /**
     * User identifier.
     */
    protected int $userId;

    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    public static function fromArray(array $array): GetUserFullInfo
    {
        return new static(
            $array['user_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}
