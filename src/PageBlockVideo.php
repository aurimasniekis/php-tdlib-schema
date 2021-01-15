<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A video.
 */
class PageBlockVideo extends PageBlock
{
    public const TYPE_NAME = 'pageBlockVideo';

    /**
     * Video file; may be null.
     */
    protected ?Video $video;

    /**
     * Video caption.
     */
    protected PageBlockCaption $caption;

    /**
     * True, if the video should be played automatically.
     */
    protected bool $needAutoplay;

    /**
     * True, if the video should be looped.
     */
    protected bool $isLooped;

    public function __construct(?Video $video, PageBlockCaption $caption, bool $needAutoplay, bool $isLooped)
    {
        parent::__construct();

        $this->video        = $video;
        $this->caption      = $caption;
        $this->needAutoplay = $needAutoplay;
        $this->isLooped     = $isLooped;
    }

    public static function fromArray(array $array): PageBlockVideo
    {
        return new static(
            (isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['need_autoplay'],
            $array['is_looped'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'video'         => (isset($this->video) ? $this->video : null),
            'caption'       => $this->caption->typeSerialize(),
            'need_autoplay' => $this->needAutoplay,
            'is_looped'     => $this->isLooped,
        ];
    }

    public function getVideo(): ?Video
    {
        return $this->video;
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function getNeedAutoplay(): bool
    {
        return $this->needAutoplay;
    }

    public function getIsLooped(): bool
    {
        return $this->isLooped;
    }
}
