<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A regular user.
 */
class UserTypeRegular extends UserType
{
    public const TYPE_NAME = 'userTypeRegular';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserTypeRegular
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
