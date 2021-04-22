<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents result of checking whether the current session can be used to transfer a chat ownership to another user.
 */
class CanTransferOwnershipResult extends TdObject
{
    public const TYPE_NAME = 'CanTransferOwnershipResult';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CanTransferOwnershipResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
