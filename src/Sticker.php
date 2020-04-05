<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a sticker.
 */
class Sticker extends TdObject
{
    public const TYPE_NAME = 'sticker';

    /**
     * The identifier of the sticker set to which the sticker belongs; 0 if none.
     *
     * @var int
     */
    protected int $setId;

    /**
     * Sticker width; as defined by the sender.
     *
     * @var int
     */
    protected int $width;

    /**
     * Sticker height; as defined by the sender.
     *
     * @var int
     */
    protected int $height;

    /**
     * Emoji corresponding to the sticker.
     *
     * @var string
     */
    protected string $emoji;

    /**
     * True, if the sticker is an animated sticker in TGS format.
     *
     * @var bool
     */
    protected bool $isAnimated;

    /**
     * True, if the sticker is a mask.
     *
     * @var bool
     */
    protected bool $isMask;

    /**
     * Position where the mask should be placed; may be null.
     *
     * @var MaskPosition|null
     */
    protected ?MaskPosition $maskPosition;

    /**
     * Sticker thumbnail in WEBP or JPEG format; may be null.
     *
     * @var PhotoSize|null
     */
    protected ?PhotoSize $thumbnail;

    /**
     * File containing the sticker.
     *
     * @var File
     */
    protected File $sticker;

    public function __construct(
        int $setId,
        int $width,
        int $height,
        string $emoji,
        bool $isAnimated,
        bool $isMask,
        ?MaskPosition $maskPosition,
        ?PhotoSize $thumbnail,
        File $sticker
    ) {
        $this->setId        = $setId;
        $this->width        = $width;
        $this->height       = $height;
        $this->emoji        = $emoji;
        $this->isAnimated   = $isAnimated;
        $this->isMask       = $isMask;
        $this->maskPosition = $maskPosition;
        $this->thumbnail    = $thumbnail;
        $this->sticker      = $sticker;
    }

    public static function fromArray(array $array): Sticker
    {
        return new static(
            $array['set_id'],
            $array['width'],
            $array['height'],
            $array['emoji'],
            $array['is_animated'],
            $array['is_mask'],
            (isset($array['mask_position']) ? TdSchemaRegistry::fromArray($array['mask_position']) : null),
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'set_id'        => $this->setId,
            'width'         => $this->width,
            'height'        => $this->height,
            'emoji'         => $this->emoji,
            'is_animated'   => $this->isAnimated,
            'is_mask'       => $this->isMask,
            'mask_position' => (isset($this->maskPosition) ? $this->maskPosition : null),
            'thumbnail'     => (isset($this->thumbnail) ? $this->thumbnail : null),
            'sticker'       => $this->sticker->typeSerialize(),
        ];
    }

    public function getSetId(): int
    {
        return $this->setId;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getIsAnimated(): bool
    {
        return $this->isAnimated;
    }

    public function getIsMask(): bool
    {
        return $this->isMask;
    }

    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }

    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }

    public function getSticker(): File
    {
        return $this->sticker;
    }
}
