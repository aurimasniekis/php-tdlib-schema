<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a message in a specific position
 */
class MessagePosition extends TdObject
{
    public const TYPE_NAME = 'messagePosition';

    /**
     * 0-based message position in the full list of suitable messages
     *
     * @var int
     */
    protected int $position;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Point in time (Unix timestamp) when the message was sent
     *
     * @var int
     */
    protected int $date;

    public function __construct(int $position, int $messageId, int $date)
    {
        $this->position = $position;
        $this->messageId = $messageId;
        $this->date = $date;
    }

    public static function fromArray(array $array): MessagePosition
    {
        return new static(
            $array['position'],
            $array['message_id'],
            $array['date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'position' => $this->position,
            'message_id' => $this->messageId,
            'date' => $this->date,
        ];
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getDate(): int
    {
        return $this->date;
    }
}
