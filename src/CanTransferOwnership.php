<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks whether the current session can be used to transfer a chat ownership to another user.
 */
class CanTransferOwnership extends TdFunction
{
    public const TYPE_NAME = 'canTransferOwnership';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CanTransferOwnership
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
