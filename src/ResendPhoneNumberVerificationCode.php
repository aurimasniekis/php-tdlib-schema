<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Re-sends the code to verify a phone number to be added to a user's Telegram Passport.
 */
class ResendPhoneNumberVerificationCode extends TdFunction
{
    public const TYPE_NAME = 'resendPhoneNumberVerificationCode';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResendPhoneNumberVerificationCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
