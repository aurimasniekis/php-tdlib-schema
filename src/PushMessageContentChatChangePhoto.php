<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat photo was edited.
 */
class PushMessageContentChatChangePhoto extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatChangePhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatChangePhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
