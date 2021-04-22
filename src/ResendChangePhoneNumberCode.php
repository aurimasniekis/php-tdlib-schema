<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Re-sends the authentication code sent to confirm a new phone number for the user. Works only if the previously received authenticationCodeInfo next_code_type was not null.
 */
class ResendChangePhoneNumberCode extends TdFunction
{
    public const TYPE_NAME = 'resendChangePhoneNumberCode';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResendChangePhoneNumberCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
