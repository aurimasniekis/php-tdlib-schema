<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Requests to send a 2-step verification password recovery code to an email address that was previously set up
 */
class RequestPasswordRecovery extends TdFunction
{
    public const TYPE_NAME = 'requestPasswordRecovery';

    public function __construct()
    {
    }

    public static function fromArray(array $array): RequestPasswordRecovery
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
