<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A voice note message.
 */
class MessageVoiceNote extends MessageContent
{
    public const TYPE_NAME = 'messageVoiceNote';

    /**
     * The voice note description.
     */
    protected VoiceNote $voiceNote;

    /**
     * Voice note caption.
     */
    protected FormattedText $caption;

    /**
     * True, if at least one of the recipients has listened to the voice note.
     */
    protected bool $isListened;

    public function __construct(VoiceNote $voiceNote, FormattedText $caption, bool $isListened)
    {
        parent::__construct();

        $this->voiceNote  = $voiceNote;
        $this->caption    = $caption;
        $this->isListened = $isListened;
    }

    public static function fromArray(array $array): MessageVoiceNote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['voice_note']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['is_listened'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'voice_note'  => $this->voiceNote->typeSerialize(),
            'caption'     => $this->caption->typeSerialize(),
            'is_listened' => $this->isListened,
        ];
    }

    public function getVoiceNote(): VoiceNote
    {
        return $this->voiceNote;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getIsListened(): bool
    {
        return $this->isListened;
    }
}
