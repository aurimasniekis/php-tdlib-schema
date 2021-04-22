<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Resets all network data usage statistics to zero. Can be called before authorization.
 */
class ResetNetworkStatistics extends TdFunction
{
    public const TYPE_NAME = 'resetNetworkStatistics';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResetNetworkStatistics
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
