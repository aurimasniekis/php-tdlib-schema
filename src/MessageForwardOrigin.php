<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about the origin of a forwarded message.
 */
class MessageForwardOrigin extends TdObject
{
    public const TYPE_NAME = 'MessageForwardOrigin';

    public function __construct()
    {
    }

    public static function fromArray(array $array): MessageForwardOrigin
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
