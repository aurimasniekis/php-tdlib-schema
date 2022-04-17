<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns users banned from the chat; can be used only by administrators in a supergroup or in a channel
 */
class ChatMembersFilterBanned extends ChatMembersFilter
{
    public const TYPE_NAME = 'chatMembersFilterBanned';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMembersFilterBanned
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
