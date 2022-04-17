<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user or the chat is not a chat member
 */
class ChatMemberStatusLeft extends ChatMemberStatus
{
    public const TYPE_NAME = 'chatMemberStatusLeft';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMemberStatusLeft
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
