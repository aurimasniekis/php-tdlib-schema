<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the current call state
 */
class CallState extends TdObject
{
    public const TYPE_NAME = 'CallState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CallState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
