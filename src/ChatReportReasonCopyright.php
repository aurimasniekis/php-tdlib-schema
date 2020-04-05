<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat contains copyrighted content.
 */
class ChatReportReasonCopyright extends ChatReportReason
{
    public const TYPE_NAME = 'chatReportReasonCopyright';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatReportReasonCopyright
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
