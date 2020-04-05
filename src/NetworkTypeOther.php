<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A different network type (e.g., Ethernet network).
 */
class NetworkTypeOther extends NetworkType
{
    public const TYPE_NAME = 'networkTypeOther';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NetworkTypeOther
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
