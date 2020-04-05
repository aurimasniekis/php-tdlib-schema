<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A voice note.
 */
class PageBlockVoiceNote extends PageBlock
{
    public const TYPE_NAME = 'pageBlockVoiceNote';

    /**
     * Voice note; may be null.
     *
     * @var VoiceNote|null
     */
    protected ?VoiceNote $voiceNote;

    /**
     * Voice note caption.
     *
     * @var PageBlockCaption
     */
    protected PageBlockCaption $caption;

    public function __construct(?VoiceNote $voiceNote, PageBlockCaption $caption)
    {
        parent::__construct();

        $this->voiceNote = $voiceNote;
        $this->caption   = $caption;
    }

    public static function fromArray(array $array): PageBlockVoiceNote
    {
        return new static(
            (null !== $array['voice_note'] ? TdSchemaRegistry::fromArray($array['voice_note']) : null),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'voice_note' => (null !== $this->voiceNote ? $this->voiceNote : null),
            'caption'    => $this->caption->typeSerialize(),
        ];
    }

    public function getVoiceNote(): ?VoiceNote
    {
        return $this->voiceNote;
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }
}
