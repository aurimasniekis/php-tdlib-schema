<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a reason why an external chat is shown in a chat list.
 */
class ChatSource extends TdObject
{
    public const TYPE_NAME = 'ChatSource';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ChatSource
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
