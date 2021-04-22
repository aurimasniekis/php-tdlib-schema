<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a voice note. The voice note must be encoded with the Opus codec, and stored inside an OGG container. Voice notes can have only a single audio channel.
 */
class VoiceNote extends TdObject
{
    public const TYPE_NAME = 'voiceNote';

    /**
     * Duration of the voice note, in seconds; as defined by the sender.
     */
    protected int $duration;

    /**
     * A waveform representation of the voice note in 5-bit format.
     */
    protected string $waveform;

    /**
     * MIME type of the file; as defined by the sender.
     */
    protected string $mimeType;

    /**
     * File containing the voice note.
     */
    protected File $voice;

    public function __construct(int $duration, string $waveform, string $mimeType, File $voice)
    {
        $this->duration = $duration;
        $this->waveform = $waveform;
        $this->mimeType = $mimeType;
        $this->voice    = $voice;
    }

    public static function fromArray(array $array): VoiceNote
    {
        return new static(
            $array['duration'],
            $array['waveform'],
            $array['mime_type'],
            TdSchemaRegistry::fromArray($array['voice']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'duration'  => $this->duration,
            'waveform'  => $this->waveform,
            'mime_type' => $this->mimeType,
            'voice'     => $this->voice->typeSerialize(),
        ];
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getWaveform(): string
    {
        return $this->waveform;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getVoice(): File
    {
        return $this->voice;
    }
}
