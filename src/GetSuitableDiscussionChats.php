<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of basic group and supergroup chats, which can be used as a discussion group for a channel. Basic group chats need to be first upgraded to supergroups before they can be set as a discussion group.
 */
class GetSuitableDiscussionChats extends TdFunction
{
    public const TYPE_NAME = 'getSuitableDiscussionChats';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetSuitableDiscussionChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
