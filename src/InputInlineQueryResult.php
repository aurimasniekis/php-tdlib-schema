<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a single result of an inline query; for bots only.
 */
class InputInlineQueryResult extends TdObject
{
    public const TYPE_NAME = 'InputInlineQueryResult';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InputInlineQueryResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
