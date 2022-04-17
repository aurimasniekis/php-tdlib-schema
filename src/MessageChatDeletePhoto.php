<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A deleted chat photo
 */
class MessageChatDeletePhoto extends MessageContent
{
    public const TYPE_NAME = 'messageChatDeletePhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatDeletePhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
