<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Requests to send a password recovery code to an email address that was previously set up. Works only when the current authorization state is authorizationStateWaitPassword.
 */
class RequestAuthenticationPasswordRecovery extends TdFunction
{
    public const TYPE_NAME = 'requestAuthenticationPasswordRecovery';

    public function __construct()
    {
    }

    public static function fromArray(array $array): RequestAuthenticationPasswordRecovery
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
