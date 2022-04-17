<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains the description of an error in a Telegram Passport element
 */
class PassportElementErrorSource extends TdObject
{
    public const TYPE_NAME = 'PassportElementErrorSource';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PassportElementErrorSource
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
