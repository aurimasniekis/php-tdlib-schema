<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The call was ended during the conversation because the users were disconnected.
 */
class CallDiscardReasonDisconnected extends CallDiscardReason
{
    public const TYPE_NAME = 'callDiscardReasonDisconnected';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallDiscardReasonDisconnected
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
