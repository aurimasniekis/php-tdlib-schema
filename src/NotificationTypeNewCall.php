<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * New call was received.
 */
class NotificationTypeNewCall extends NotificationType
{
    public const TYPE_NAME = 'notificationTypeNewCall';

    /**
     * Call identifier.
     */
    protected int $callId;

    public function __construct(int $callId)
    {
        parent::__construct();

        $this->callId = $callId;
    }

    public static function fromArray(array $array): NotificationTypeNewCall
    {
        return new static(
            $array['call_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'call_id' => $this->callId,
        ];
    }

    public function getCallId(): int
    {
        return $this->callId;
    }
}
