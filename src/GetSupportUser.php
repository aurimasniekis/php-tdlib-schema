<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a user that can be contacted to get support
 */
class GetSupportUser extends TdFunction
{
    public const TYPE_NAME = 'getSupportUser';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetSupportUser
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
