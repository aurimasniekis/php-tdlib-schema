<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A video note message
 */
class PushMessageContentVideoNote extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentVideoNote';

    /**
     * Message content; may be null
     *
     * @var VideoNote|null
     */
    protected ?VideoNote $videoNote;

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(?VideoNote $videoNote, bool $isPinned)
    {
        parent::__construct();

        $this->videoNote = $videoNote;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentVideoNote
    {
        return new static(
            (isset($array['video_note']) ? TdSchemaRegistry::fromArray($array['video_note']) : null),
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'video_note' => (isset($this->videoNote) ? $this->videoNote : null),
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getVideoNote(): ?VideoNote
    {
        return $this->videoNote;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
