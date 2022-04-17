<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the type of a call server
 */
class CallServerType extends TdObject
{
    public const TYPE_NAME = 'CallServerType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CallServerType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
