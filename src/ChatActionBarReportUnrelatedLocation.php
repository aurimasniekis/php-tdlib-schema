<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat is a location-based supergroup, which can be reported as having unrelated location using the method reportChat with the reason chatReportReasonUnrelatedLocation.
 */
class ChatActionBarReportUnrelatedLocation extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarReportUnrelatedLocation';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionBarReportUnrelatedLocation
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
