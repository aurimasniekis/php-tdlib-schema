<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A video note message.
 */
class MessageVideoNote extends MessageContent
{
    public const TYPE_NAME = 'messageVideoNote';

    /**
     * The video note description.
     *
     * @var VideoNote
     */
    protected VideoNote $videoNote;

    /**
     * True, if at least one of the recipients has viewed the video note.
     *
     * @var bool
     */
    protected bool $isViewed;

    /**
     * True, if the video note thumbnail must be blurred and the video note must be shown only while tapped.
     *
     * @var bool
     */
    protected bool $isSecret;

    public function __construct(VideoNote $videoNote, bool $isViewed, bool $isSecret)
    {
        parent::__construct();

        $this->videoNote = $videoNote;
        $this->isViewed  = $isViewed;
        $this->isSecret  = $isSecret;
    }

    public static function fromArray(array $array): MessageVideoNote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video_note']),
            $array['is_viewed'],
            $array['is_secret'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'video_note' => $this->videoNote->typeSerialize(),
            'is_viewed'  => $this->isViewed,
            'is_secret'  => $this->isSecret,
        ];
    }

    public function getVideoNote(): VideoNote
    {
        return $this->videoNote;
    }

    public function getIsViewed(): bool
    {
        return $this->isViewed;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }
}
