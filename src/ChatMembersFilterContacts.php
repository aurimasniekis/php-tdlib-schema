<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns contacts of the user
 */
class ChatMembersFilterContacts extends ChatMembersFilter
{
    public const TYPE_NAME = 'chatMembersFilterContacts';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMembersFilterContacts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
