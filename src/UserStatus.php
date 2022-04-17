<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the last time the user was online
 */
class UserStatus extends TdObject
{
    public const TYPE_NAME = 'UserStatus';

    public function __construct()
    {
    }

    public static function fromArray(array $array): UserStatus
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
