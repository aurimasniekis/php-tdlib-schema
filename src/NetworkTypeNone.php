<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The network is not available.
 */
class NetworkTypeNone extends NetworkType
{
    public const TYPE_NAME = 'networkTypeNone';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NetworkTypeNone
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
