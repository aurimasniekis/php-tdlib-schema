<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with information about an ended voice chat.
 */
class MessageVoiceChatEnded extends MessageContent
{
    public const TYPE_NAME = 'messageVoiceChatEnded';

    /**
     * Call duration.
     */
    protected int $duration;

    public function __construct(int $duration)
    {
        parent::__construct();

        $this->duration = $duration;
    }

    public static function fromArray(array $array): MessageVoiceChatEnded
    {
        return new static(
            $array['duration'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'duration' => $this->duration,
        ];
    }

    public function getDuration(): int
    {
        return $this->duration;
    }
}
