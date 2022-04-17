<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new member joined the chat
 */
class ChatEventMemberJoined extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMemberJoined';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMemberJoined
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
