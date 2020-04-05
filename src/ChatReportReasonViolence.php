<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat promotes violence.
 */
class ChatReportReasonViolence extends ChatReportReason
{
    public const TYPE_NAME = 'chatReportReasonViolence';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatReportReasonViolence
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
