<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns all found messages, no filter is applied
 */
class SearchMessagesFilterEmpty extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterEmpty';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterEmpty
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
