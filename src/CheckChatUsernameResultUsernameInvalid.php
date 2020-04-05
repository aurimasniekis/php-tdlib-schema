<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The username is invalid.
 */
class CheckChatUsernameResultUsernameInvalid extends CheckChatUsernameResult
{
    public const TYPE_NAME = 'checkChatUsernameResultUsernameInvalid';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckChatUsernameResultUsernameInvalid
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
