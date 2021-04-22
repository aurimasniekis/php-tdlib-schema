<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns only voice and video note messages
 */
class SearchMessagesFilterVoiceAndVideoNote extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterVoiceAndVideoNote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterVoiceAndVideoNote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
