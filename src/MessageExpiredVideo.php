<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An expired video message (self-destructed after TTL has elapsed)
 */
class MessageExpiredVideo extends MessageContent
{
    public const TYPE_NAME = 'messageExpiredVideo';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageExpiredVideo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
