<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element containing the user's phone number.
 */
class PassportElementTypePhoneNumber extends PassportElementType
{
    public const TYPE_NAME = 'passportElementTypePhoneNumber';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementTypePhoneNumber
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
