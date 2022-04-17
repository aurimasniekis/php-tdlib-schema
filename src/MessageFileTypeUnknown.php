<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The messages was exported from a chat of unknown type
 */
class MessageFileTypeUnknown extends MessageFileType
{
    public const TYPE_NAME = 'messageFileTypeUnknown';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageFileTypeUnknown
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
