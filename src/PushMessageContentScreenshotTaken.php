<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A screenshot of a message in the chat has been taken
 */
class PushMessageContentScreenshotTaken extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentScreenshotTaken';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentScreenshotTaken
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
