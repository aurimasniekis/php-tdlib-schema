<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new member joined the chat by invite link
 */
class PushMessageContentChatJoinByLink extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatJoinByLink';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatJoinByLink
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
