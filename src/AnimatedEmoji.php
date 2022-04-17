<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes an animated representation of an emoji
 */
class AnimatedEmoji extends TdObject
{
    public const TYPE_NAME = 'animatedEmoji';

    /**
     * Animated sticker for the emoji
     *
     * @var Sticker
     */
    protected Sticker $sticker;

    /**
     * Emoji modifier fitzpatrick type; 0-6; 0 if none
     *
     * @var int
     */
    protected int $fitzpatrickType;

    /**
     * File containing the sound to be played when the animated emoji is clicked if any; may be null. The sound is encoded with the Opus codec, and stored inside an OGG container
     *
     * @var File|null
     */
    protected ?File $sound;

    public function __construct(Sticker $sticker, int $fitzpatrickType, ?File $sound)
    {
        $this->sticker = $sticker;
        $this->fitzpatrickType = $fitzpatrickType;
        $this->sound = $sound;
    }

    public static function fromArray(array $array): AnimatedEmoji
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['fitzpatrick_type'],
            (isset($array['sound']) ? TdSchemaRegistry::fromArray($array['sound']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
            'fitzpatrick_type' => $this->fitzpatrickType,
            'sound' => (isset($this->sound) ? $this->sound : null),
        ];
    }

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    public function getFitzpatrickType(): int
    {
        return $this->fitzpatrickType;
    }

    public function getSound(): ?File
    {
        return $this->sound;
    }
}
