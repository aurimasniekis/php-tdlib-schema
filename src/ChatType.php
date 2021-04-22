<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the type of a chat
 */
class ChatType extends TdObject
{
    public const TYPE_NAME = 'ChatType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ChatType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
