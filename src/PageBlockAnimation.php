<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An animation
 */
class PageBlockAnimation extends PageBlock
{
    public const TYPE_NAME = 'pageBlockAnimation';

    /**
     * Animation file; may be null
     *
     * @var Animation|null
     */
    protected ?Animation $animation;

    /**
     * Animation caption
     *
     * @var PageBlockCaption
     */
    protected PageBlockCaption $caption;

    /**
     * True, if the animation should be played automatically
     *
     * @var bool
     */
    protected bool $needAutoplay;

    public function __construct(?Animation $animation, PageBlockCaption $caption, bool $needAutoplay)
    {
        parent::__construct();

        $this->animation = $animation;
        $this->caption = $caption;
        $this->needAutoplay = $needAutoplay;
    }

    public static function fromArray(array $array): PageBlockAnimation
    {
        return new static(
            (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['need_autoplay'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'animation' => (isset($this->animation) ? $this->animation : null),
            'caption' => $this->caption->typeSerialize(),
            'need_autoplay' => $this->needAutoplay,
        ];
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function getNeedAutoplay(): bool
    {
        return $this->needAutoplay;
    }
}
