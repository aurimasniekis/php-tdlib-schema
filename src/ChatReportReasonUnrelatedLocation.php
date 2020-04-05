<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The location-based chat is unrelated to its stated location.
 */
class ChatReportReasonUnrelatedLocation extends ChatReportReason
{
    public const TYPE_NAME = 'chatReportReasonUnrelatedLocation';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatReportReasonUnrelatedLocation
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
