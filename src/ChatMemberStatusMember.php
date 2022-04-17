<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is a member of the chat, without any additional privileges or restrictions
 */
class ChatMemberStatusMember extends ChatMemberStatus
{
    public const TYPE_NAME = 'chatMemberStatusMember';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMemberStatusMember
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
