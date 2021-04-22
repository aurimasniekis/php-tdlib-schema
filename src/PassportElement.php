<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a Telegram Passport element
 */
class PassportElement extends TdObject
{
    public const TYPE_NAME = 'PassportElement';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PassportElement
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
