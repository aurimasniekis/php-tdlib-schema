<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns only incoming call messages with missed/declined discard reasons.
 */
class SearchMessagesFilterMissedCall extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterMissedCall';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterMissedCall
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
