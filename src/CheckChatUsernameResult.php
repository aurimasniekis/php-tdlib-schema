<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents result of checking whether a username can be set for a chat
 */
class CheckChatUsernameResult extends TdObject
{
    public const TYPE_NAME = 'CheckChatUsernameResult';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CheckChatUsernameResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
