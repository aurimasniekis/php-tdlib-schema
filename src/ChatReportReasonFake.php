<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat represents a fake account
 */
class ChatReportReasonFake extends ChatReportReason
{
    public const TYPE_NAME = 'chatReportReasonFake';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatReportReasonFake
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
