<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a single result of an inline query.
 */
class InlineQueryResult extends TdObject
{
    public const TYPE_NAME = 'InlineQueryResult';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InlineQueryResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
