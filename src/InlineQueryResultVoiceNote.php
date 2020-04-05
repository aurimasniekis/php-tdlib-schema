<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a voice note.
 */
class InlineQueryResultVoiceNote extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultVoiceNote';

    /**
     * Unique identifier of the query result.
     *
     * @var string
     */
    protected string $id;

    /**
     * Voice note.
     *
     * @var VoiceNote
     */
    protected VoiceNote $voiceNote;

    /**
     * Title of the voice note.
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $id, VoiceNote $voiceNote, string $title)
    {
        parent::__construct();

        $this->id        = $id;
        $this->voiceNote = $voiceNote;
        $this->title     = $title;
    }

    public static function fromArray(array $array): InlineQueryResultVoiceNote
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['voice_note']),
            $array['title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'id'         => $this->id,
            'voice_note' => $this->voiceNote->typeSerialize(),
            'title'      => $this->title,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getVoiceNote(): VoiceNote
    {
        return $this->voiceNote;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
