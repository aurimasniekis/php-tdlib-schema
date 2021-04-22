<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A screenshot of a message in the chat has been taken.
 */
class MessageScreenshotTaken extends MessageContent
{
    public const TYPE_NAME = 'messageScreenshotTaken';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageScreenshotTaken
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
