<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new member joined the chat by invite link
 */
class MessageChatJoinByLink extends MessageContent
{
    public const TYPE_NAME = 'messageChatJoinByLink';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatJoinByLink
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
