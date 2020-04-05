<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat has child abuse related content.
 */
class ChatReportReasonChildAbuse extends ChatReportReason
{
    public const TYPE_NAME = 'chatReportReasonChildAbuse';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatReportReasonChildAbuse
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
