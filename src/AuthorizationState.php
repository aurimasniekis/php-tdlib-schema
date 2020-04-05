<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents the current authorization state of the client.
 */
class AuthorizationState extends TdObject
{
    public const TYPE_NAME = 'AuthorizationState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): AuthorizationState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
