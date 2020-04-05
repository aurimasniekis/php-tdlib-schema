<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns all active live locations that should be updated by the client. The list is persistent across application restarts only if the message database is used.
 */
class GetActiveLiveLocationMessages extends TdFunction
{
    public const TYPE_NAME = 'getActiveLiveLocationMessages';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetActiveLiveLocationMessages
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
