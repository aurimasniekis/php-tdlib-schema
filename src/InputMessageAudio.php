<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An audio message
 */
class InputMessageAudio extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageAudio';

    /**
     * Audio file to be sent
     *
     * @var InputFile
     */
    protected InputFile $audio;

    /**
     * Thumbnail of the cover for the album; pass null to skip thumbnail uploading
     *
     * @var InputThumbnail
     */
    protected InputThumbnail $albumCoverThumbnail;

    /**
     * Duration of the audio, in seconds; may be replaced by the server
     *
     * @var int
     */
    protected int $duration;

    /**
     * Title of the audio; 0-64 characters; may be replaced by the server
     *
     * @var string
     */
    protected string $title;

    /**
     * Performer of the audio; 0-64 characters, may be replaced by the server
     *
     * @var string
     */
    protected string $performer;

    /**
     * Audio caption; pass null to use an empty caption; 0-GetOption("message_caption_length_max") characters
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    public function __construct(
        InputFile $audio,
        InputThumbnail $albumCoverThumbnail,
        int $duration,
        string $title,
        string $performer,
        FormattedText $caption
    ) {
        parent::__construct();

        $this->audio = $audio;
        $this->albumCoverThumbnail = $albumCoverThumbnail;
        $this->duration = $duration;
        $this->title = $title;
        $this->performer = $performer;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): InputMessageAudio
    {
        return new static(
            TdSchemaRegistry::fromArray($array['audio']),
            TdSchemaRegistry::fromArray($array['album_cover_thumbnail']),
            $array['duration'],
            $array['title'],
            $array['performer'],
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'audio' => $this->audio->typeSerialize(),
            'album_cover_thumbnail' => $this->albumCoverThumbnail->typeSerialize(),
            'duration' => $this->duration,
            'title' => $this->title,
            'performer' => $this->performer,
            'caption' => $this->caption->typeSerialize(),
        ];
    }

    public function getAudio(): InputFile
    {
        return $this->audio;
    }

    public function getAlbumCoverThumbnail(): InputThumbnail
    {
        return $this->albumCoverThumbnail;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPerformer(): string
    {
        return $this->performer;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
