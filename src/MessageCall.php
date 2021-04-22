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
     * True, if the call was a video call.
     */
    protected bool $isVideo;

    /**
     * Reason why the call was discarded.
     */
    protected CallDiscardReason $discardReason;

    /**
     * Call duration, in seconds.
     */
    protected int $duration;

    public function __construct(bool $isVideo, CallDiscardReason $discardReason, int $duration)
    {
        parent::__construct();

        $this->isVideo       = $isVideo;
        $this->discardReason = $discardReason;
        $this->duration      = $duration;
    }

    public static function fromArray(array $array): MessageCall
    {
        return new static(
            $array['is_video'],
            TdSchemaRegistry::fromArray($array['discard_reason']),
            $array['duration'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'is_video'       => $this->isVideo,
            'discard_reason' => $this->discardReason->typeSerialize(),
            'duration'       => $this->duration,
        ];
    }

    public function getIsVideo(): bool
    {
        return $this->isVideo;
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
