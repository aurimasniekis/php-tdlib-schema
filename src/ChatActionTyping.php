<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is typing a message
 */
class ChatActionTyping extends ChatAction
{
    public const TYPE_NAME = 'chatActionTyping';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionTyping
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
