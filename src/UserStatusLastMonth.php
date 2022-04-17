<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is offline, but was online last month
 */
class UserStatusLastMonth extends UserStatus
{
    public const TYPE_NAME = 'userStatusLastMonth';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserStatusLastMonth
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
