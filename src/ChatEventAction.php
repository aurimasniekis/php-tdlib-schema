<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a chat event.
 */
class ChatEventAction extends TdObject
{
    public const TYPE_NAME = 'ChatEventAction';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ChatEventAction
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
