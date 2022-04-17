<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with an animated emoji
 */
class MessageAnimatedEmoji extends MessageContent
{
    public const TYPE_NAME = 'messageAnimatedEmoji';

    /**
     * The animated emoji
     *
     * @var AnimatedEmoji
     */
    protected AnimatedEmoji $animatedEmoji;

    /**
     * The corresponding emoji
     *
     * @var string
     */
    protected string $emoji;

    public function __construct(AnimatedEmoji $animatedEmoji, string $emoji)
    {
        parent::__construct();

        $this->animatedEmoji = $animatedEmoji;
        $this->emoji = $emoji;
    }

    public static function fromArray(array $array): MessageAnimatedEmoji
    {
        return new static(
            TdSchemaRegistry::fromArray($array['animated_emoji']),
            $array['emoji'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'animated_emoji' => $this->animatedEmoji->typeSerialize(),
            'emoji' => $this->emoji,
        ];
    }

    public function getAnimatedEmoji(): AnimatedEmoji
    {
        return $this->animatedEmoji;
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }
}
