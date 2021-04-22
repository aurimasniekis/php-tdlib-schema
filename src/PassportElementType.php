<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains the type of a Telegram Passport element
 */
class PassportElementType extends TdObject
{
    public const TYPE_NAME = 'PassportElementType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PassportElementType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
