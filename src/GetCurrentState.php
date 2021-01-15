<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns all updates needed to restore current TDLib state, i.e. all actual UpdateAuthorizationState/UpdateUser/UpdateNewChat and others. This is especially useful if TDLib is run in a separate process. This is an offline method. Can be called before authorization.
 */
class GetCurrentState extends TdFunction
{
    public const TYPE_NAME = 'getCurrentState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetCurrentState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
