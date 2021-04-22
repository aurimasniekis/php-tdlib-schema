<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Resends phone number confirmation code.
 */
class ResendPhoneNumberConfirmationCode extends TdFunction
{
    public const TYPE_NAME = 'resendPhoneNumberConfirmationCode';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResendPhoneNumberConfirmationCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
