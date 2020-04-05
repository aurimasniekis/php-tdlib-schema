<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat can be reported as spam using the method reportChat with the reason chatReportReasonSpam.
 */
class ChatActionBarReportSpam extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarReportSpam';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionBarReportSpam
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
