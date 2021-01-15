<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message will be sent at the specified date.
 */
class MessageSchedulingStateSendAtDate extends MessageSchedulingState
{
    public const TYPE_NAME = 'messageSchedulingStateSendAtDate';

    /**
     * Date the message will be sent. The date must be within 367 days in the future.
     */
    protected int $sendDate;

    public function __construct(int $sendDate)
    {
        parent::__construct();

        $this->sendDate = $sendDate;
    }

    public static function fromArray(array $array): MessageSchedulingStateSendAtDate
    {
        return new static(
            $array['send_date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'send_date' => $this->sendDate,
        ];
    }

    public function getSendDate(): int
    {
        return $this->sendDate;
    }
}
