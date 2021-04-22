<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the reason why a chat is reported.
 */
class ChatReportReason extends TdObject
{
    public const TYPE_NAME = 'ChatReportReason';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ChatReportReason
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
