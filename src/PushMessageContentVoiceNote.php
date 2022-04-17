<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A voice note message
 */
class PushMessageContentVoiceNote extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentVoiceNote';

    /**
     * Message content; may be null
     *
     * @var VoiceNote|null
     */
    protected ?VoiceNote $voiceNote;

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(?VoiceNote $voiceNote, bool $isPinned)
    {
        parent::__construct();

        $this->voiceNote = $voiceNote;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentVoiceNote
    {
        return new static(
            (isset($array['voice_note']) ? TdSchemaRegistry::fromArray($array['voice_note']) : null),
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'voice_note' => (isset($this->voiceNote) ? $this->voiceNote : null),
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getVoiceNote(): ?VoiceNote
    {
        return $this->voiceNote;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
