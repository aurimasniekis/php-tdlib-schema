<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns only photo and video messages
 */
class SearchMessagesFilterPhotoAndVideo extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterPhotoAndVideo';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterPhotoAndVideo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
