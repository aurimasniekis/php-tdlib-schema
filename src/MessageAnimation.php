<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An animation message (GIF-style).
 */
class MessageAnimation extends MessageContent
{
    public const TYPE_NAME = 'messageAnimation';

    /**
     * The animation description
     *
     * @var Animation
     */
    protected Animation $animation;

    /**
     * Animation caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * True, if the animation thumbnail must be blurred and the animation must be shown only while tapped
     *
     * @var bool
     */
    protected bool $isSecret;

    public function __construct(Animation $animation, FormattedText $caption, bool $isSecret)
    {
        parent::__construct();

        $this->animation = $animation;
        $this->caption = $caption;
        $this->isSecret = $isSecret;
    }

    public static function fromArray(array $array): MessageAnimation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['animation']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['is_secret'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'animation' => $this->animation->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
            'is_secret' => $this->isSecret,
        ];
    }

    public function getAnimation(): Animation
    {
        return $this->animation;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }
}
