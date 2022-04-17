<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains content of a push message notification
 */
class PushMessageContent extends TdObject
{
    public const TYPE_NAME = 'PushMessageContent';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PushMessageContent
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
