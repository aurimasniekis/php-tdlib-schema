<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns only failed to send messages. This filter can be used only if the message database is used.
 */
class SearchMessagesFilterFailedToSend extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterFailedToSend';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterFailedToSend
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
