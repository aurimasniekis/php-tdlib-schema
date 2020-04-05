<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns only audio messages.
 */
class SearchMessagesFilterAudio extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterAudio';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterAudio
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
