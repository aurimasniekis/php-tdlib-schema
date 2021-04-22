<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is offline, but was online last week.
 */
class UserStatusLastWeek extends UserStatus
{
    public const TYPE_NAME = 'userStatusLastWeek';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserStatusLastWeek
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
