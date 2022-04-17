<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new member was accepted to the chat by an administrator
 */
class PushMessageContentChatJoinByRequest extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatJoinByRequest';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatJoinByRequest
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
