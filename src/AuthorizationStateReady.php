<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user has been successfully authorized. TDLib is now ready to answer queries
 */
class AuthorizationStateReady extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateReady';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateReady
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
