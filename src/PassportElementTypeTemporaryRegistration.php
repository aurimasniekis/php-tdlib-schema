<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element containing the user's temporary registration.
 */
class PassportElementTypeTemporaryRegistration extends PassportElementType
{
    public const TYPE_NAME = 'passportElementTypeTemporaryRegistration';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementTypeTemporaryRegistration
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
