<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a filter for message search results
 */
class SearchMessagesFilter extends TdObject
{
    public const TYPE_NAME = 'SearchMessagesFilter';

    public function __construct()
    {
    }

    public static function fromArray(array $array): SearchMessagesFilter
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
