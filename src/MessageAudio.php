<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An audio message.
 */
class MessageAudio extends MessageContent
{
    public const TYPE_NAME = 'messageAudio';

    /**
     * The audio description.
     */
    protected Audio $audio;

    /**
     * Audio caption.
     */
    protected FormattedText $caption;

    public function __construct(Audio $audio, FormattedText $caption)
    {
        parent::__construct();

        $this->audio   = $audio;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): MessageAudio
    {
        return new static(
            TdSchemaRegistry::fromArray($array['audio']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'audio'   => $this->audio->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
        ];
    }

    public function getAudio(): Audio
    {
        return $this->audio;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
