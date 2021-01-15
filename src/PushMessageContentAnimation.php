<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An animation message (GIF-style).
 */
class PushMessageContentAnimation extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentAnimation';

    /**
     * Message content; may be null.
     */
    protected ?Animation $animation;

    /**
     * Animation caption.
     */
    protected string $caption;

    /**
     * True, if the message is a pinned message with the specified content.
     */
    protected bool $isPinned;

    public function __construct(?Animation $animation, string $caption, bool $isPinned)
    {
        parent::__construct();

        $this->animation = $animation;
        $this->caption   = $caption;
        $this->isPinned  = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentAnimation
    {
        return new static(
            (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
            $array['caption'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'animation' => (isset($this->animation) ? $this->animation : null),
            'caption'   => $this->caption,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
