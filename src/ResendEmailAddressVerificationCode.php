<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Re-sends the code to verify an email address to be added to a user's Telegram Passport
 */
class ResendEmailAddressVerificationCode extends TdFunction
{
    public const TYPE_NAME = 'resendEmailAddressVerificationCode';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResendEmailAddressVerificationCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
