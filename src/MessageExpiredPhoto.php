<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An expired photo message (self-destructed after TTL has elapsed).
 */
class MessageExpiredPhoto extends MessageContent
{
    public const TYPE_NAME = 'messageExpiredPhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageExpiredPhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
