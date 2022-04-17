<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Removes 2-step verification password without previous password and access to recovery email address. The password can't be reset immediately and the request needs to be repeated after the specified time
 */
class ResetPassword extends TdFunction
{
    public const TYPE_NAME = 'resetPassword';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResetPassword
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
