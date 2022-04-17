<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message will be sent when the peer will be online. Applicable to private chats only and when the exact online status of the peer is known
 */
class MessageSchedulingStateSendWhenOnline extends MessageSchedulingState
{
    public const TYPE_NAME = 'messageSchedulingStateSendWhenOnline';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSchedulingStateSendWhenOnline
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
