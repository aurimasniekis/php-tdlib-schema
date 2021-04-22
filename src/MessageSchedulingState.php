<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about the time when a scheduled message will be sent.
 */
class MessageSchedulingState extends TdObject
{
    public const TYPE_NAME = 'MessageSchedulingState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): MessageSchedulingState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
