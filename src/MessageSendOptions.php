<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Options to be used when a message is sent.
 */
class MessageSendOptions extends TdObject
{
    public const TYPE_NAME = 'messageSendOptions';

    /**
     * Pass true to disable notification for the message.
     */
    protected bool $disableNotification;

    /**
     * Pass true if the message is sent from the background.
     */
    protected bool $fromBackground;

    /**
     * Message scheduling state. Messages sent to a secret chat, live location messages and self-destructing messages can't be scheduled.
     */
    protected MessageSchedulingState $schedulingState;

    public function __construct(bool $disableNotification, bool $fromBackground, MessageSchedulingState $schedulingState)
    {
        $this->disableNotification = $disableNotification;
        $this->fromBackground      = $fromBackground;
        $this->schedulingState     = $schedulingState;
    }

    public static function fromArray(array $array): MessageSendOptions
    {
        return new static(
            $array['disable_notification'],
            $array['from_background'],
            TdSchemaRegistry::fromArray($array['scheduling_state']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'disable_notification' => $this->disableNotification,
            'from_background'      => $this->fromBackground,
            'scheduling_state'     => $this->schedulingState->typeSerialize(),
        ];
    }

    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    public function getFromBackground(): bool
    {
        return $this->fromBackground;
    }

    public function getSchedulingState(): MessageSchedulingState
    {
        return $this->schedulingState;
    }
}
