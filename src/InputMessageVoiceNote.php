<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A voice note message.
 */
class InputMessageVoiceNote extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageVoiceNote';

    /**
     * Voice note to be sent.
     */
    protected InputFile $voiceNote;

    /**
     * Duration of the voice note, in seconds.
     */
    protected int $duration;

    /**
     * Waveform representation of the voice note, in 5-bit format.
     */
    protected string $waveform;

    /**
     * Voice note caption; 0-GetOption("message_caption_length_max") characters.
     */
    protected FormattedText $caption;

    public function __construct(InputFile $voiceNote, int $duration, string $waveform, FormattedText $caption)
    {
        parent::__construct();

        $this->voiceNote = $voiceNote;
        $this->duration  = $duration;
        $this->waveform  = $waveform;
        $this->caption   = $caption;
    }

    public static function fromArray(array $array): InputMessageVoiceNote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['voice_note']),
            $array['duration'],
            $array['waveform'],
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'voice_note' => $this->voiceNote->typeSerialize(),
            'duration'   => $this->duration,
            'waveform'   => $this->waveform,
            'caption'    => $this->caption->typeSerialize(),
        ];
    }

    public function getVoiceNote(): InputFile
    {
        return $this->voiceNote;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getWaveform(): string
    {
        return $this->waveform;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
