<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns saved order info, if any
 */
class GetSavedOrderInfo extends TdFunction
{
    public const TYPE_NAME = 'getSavedOrderInfo';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetSavedOrderInfo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
