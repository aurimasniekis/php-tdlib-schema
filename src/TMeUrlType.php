<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the type of a URL linking to an internal Telegram entity
 */
class TMeUrlType extends TdObject
{
    public const TYPE_NAME = 'TMeUrlType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): TMeUrlType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
