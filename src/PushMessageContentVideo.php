<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A video message
 */
class PushMessageContentVideo extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentVideo';

    /**
     * Message content; may be null
     *
     * @var Video|null
     */
    protected ?Video $video;

    /**
     * Video caption
     *
     * @var string
     */
    protected string $caption;

    /**
     * True, if the video is secret
     *
     * @var bool
     */
    protected bool $isSecret;

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(?Video $video, string $caption, bool $isSecret, bool $isPinned)
    {
        parent::__construct();

        $this->video = $video;
        $this->caption = $caption;
        $this->isSecret = $isSecret;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentVideo
    {
        return new static(
            (isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null),
            $array['caption'],
            $array['is_secret'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'video' => (isset($this->video) ? $this->video : null),
            'caption' => $this->caption,
            'is_secret' => $this->isSecret,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getVideo(): ?Video
    {
        return $this->video;
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
