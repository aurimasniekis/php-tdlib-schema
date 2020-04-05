<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user has too much chats with username, one of them should be made private first.
 */
class CheckChatUsernameResultPublicChatsTooMuch extends CheckChatUsernameResult
{
    public const TYPE_NAME = 'checkChatUsernameResultPublicChatsTooMuch';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckChatUsernameResultPublicChatsTooMuch
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
