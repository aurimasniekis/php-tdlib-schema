<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message is being sent now, but has not yet been delivered to the server
 */
class MessageSendingStatePending extends MessageSendingState
{
    public const TYPE_NAME = 'messageSendingStatePending';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSendingStatePending
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
