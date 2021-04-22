<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * No information on the user besides the user identifier is available, yet this user has not been deleted. This object is extremely rare and must be handled like a deleted user. It is not possible to perform any actions on users of this type.
 */
class UserTypeUnknown extends UserType
{
    public const TYPE_NAME = 'userTypeUnknown';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserTypeUnknown
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
