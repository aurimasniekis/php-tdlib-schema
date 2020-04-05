<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with information about an ended call.
 */
class MessageCall extends MessageContent
{
    public const TYPE_NAME = 'messageCall';

    /**
     * Reason why the call was discarded.
     *
     * @var CallDiscardReason
     */
    protected CallDiscardReason $discardReason;

    /**
     * Call duration, in seconds.
     *
     * @var int
     */
    protected int $duration;

    public function __construct(CallDiscardReason $discardReason, int $duration)
    {
        parent::__construct();

        $this->discardReason = $discardReason;
        $this->duration      = $duration;
    }

    public static function fromArray(array $array): MessageCall
    {
        return new static(
            TdSchemaRegistry::fromArray($array['discard_reason']),
            $array['duration'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'discard_reason' => $this->discardReason->typeSerialize(),
            'duration'       => $this->duration,
        ];
    }

    public function getDiscardReason(): CallDiscardReason
    {
        return $this->discardReason;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }
}
