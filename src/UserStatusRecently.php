<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user was online recently
 */
class UserStatusRecently extends UserStatus
{
    public const TYPE_NAME = 'userStatusRecently';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserStatusRecently
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
