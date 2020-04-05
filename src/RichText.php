<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a text object inside an instant-view web page.
 */
class RichText extends TdObject
{
    public const TYPE_NAME = 'RichText';

    public function __construct()
    {
    }

    public static function fromArray(array $array): RichText
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
