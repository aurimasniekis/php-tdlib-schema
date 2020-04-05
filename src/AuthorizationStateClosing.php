<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * TDLib is closing, all subsequent queries will be answered with the error 500. Note that closing TDLib can take a while. All resources will be freed only after authorizationStateClosed has been received.
 */
class AuthorizationStateClosing extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateClosing';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateClosing
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
