<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about the sender of a message
 */
class MessageSender extends TdObject
{
    public const TYPE_NAME = 'MessageSender';

    public function __construct()
    {
    }

    public static function fromArray(array $array): MessageSender
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
