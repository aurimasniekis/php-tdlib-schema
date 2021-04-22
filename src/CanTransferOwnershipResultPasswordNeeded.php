<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The 2-step verification needs to be enabled first
 */
class CanTransferOwnershipResultPasswordNeeded extends CanTransferOwnershipResult
{
    public const TYPE_NAME = 'canTransferOwnershipResultPasswordNeeded';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanTransferOwnershipResultPasswordNeeded
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
