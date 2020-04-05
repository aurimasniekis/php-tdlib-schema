<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a sticker set.
 */
class StickerSet extends TdObject
{
    public const TYPE_NAME = 'stickerSet';

    /**
     * Identifier of the sticker set.
     *
     * @var int
     */
    protected int $id;

    /**
     * Title of the sticker set.
     *
     * @var string
     */
    protected string $title;

    /**
     * Name of the sticker set.
     *
     * @var string
     */
    protected string $name;

    /**
     * Sticker set thumbnail in WEBP format with width and height 100; may be null. The file can be downloaded only before the thumbnail is changed.
     *
     * @var PhotoSize|null
     */
    protected ?PhotoSize $thumbnail;

    /**
     * True, if the sticker set has been installed by the current user.
     *
     * @var bool
     */
    protected bool $isInstalled;

    /**
     * True, if the sticker set has been archived. A sticker set can't be installed and archived simultaneously.
     *
     * @var bool
     */
    protected bool $isArchived;

    /**
     * True, if the sticker set is official.
     *
     * @var bool
     */
    protected bool $isOfficial;

    /**
     * True, is the stickers in the set are animated.
     *
     * @var bool
     */
    protected bool $isAnimated;

    /**
     * True, if the stickers in the set are masks.
     *
     * @var bool
     */
    protected bool $isMasks;

    /**
     * True for already viewed trending sticker sets.
     *
     * @var bool
     */
    protected bool $isViewed;

    /**
     * List of stickers in this set.
     *
     * @var Sticker[]
     */
    protected array $stickers;

    /**
     * A list of emoji corresponding to the stickers in the same order. The list is only for informational purposes, because a sticker is always sent with a fixed emoji from the corresponding Sticker object.
     *
     * @var Emojis[]
     */
    protected array $emojis;

    public function __construct(
        int $id,
        string $title,
        string $name,
        ?PhotoSize $thumbnail,
        bool $isInstalled,
        bool $isArchived,
        bool $isOfficial,
        bool $isAnimated,
        bool $isMasks,
        bool $isViewed,
        array $stickers,
        array $emojis
    ) {
        $this->id          = $id;
        $this->title       = $title;
        $this->name        = $name;
        $this->thumbnail   = $thumbnail;
        $this->isInstalled = $isInstalled;
        $this->isArchived  = $isArchived;
        $this->isOfficial  = $isOfficial;
        $this->isAnimated  = $isAnimated;
        $this->isMasks     = $isMasks;
        $this->isViewed    = $isViewed;
        $this->stickers    = $stickers;
        $this->emojis      = $emojis;
    }

    public static function fromArray(array $array): StickerSet
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['name'],
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            $array['is_installed'],
            $array['is_archived'],
            $array['is_official'],
            $array['is_animated'],
            $array['is_masks'],
            $array['is_viewed'],
            array_map(fn ($x) => Sticker::fromArray($x), $array['stickers']),
            array_map(fn ($x) => Emojis::fromArray($x), $array['emojis']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'id'              => $this->id,
            'title'           => $this->title,
            'name'            => $this->name,
            'thumbnail'       => (isset($this->thumbnail) ? $this->thumbnail : null),
            'is_installed'    => $this->isInstalled,
            'is_archived'     => $this->isArchived,
            'is_official'     => $this->isOfficial,
            'is_animated'     => $this->isAnimated,
            'is_masks'        => $this->isMasks,
            'is_viewed'       => $this->isViewed,
            array_map(fn ($x) => $x->typeSerialize(), $this->stickers),
            array_map(fn ($x) => $x->typeSerialize(), $this->emojis),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }

    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    public function getIsArchived(): bool
    {
        return $this->isArchived;
    }

    public function getIsOfficial(): bool
    {
        return $this->isOfficial;
    }

    public function getIsAnimated(): bool
    {
        return $this->isAnimated;
    }

    public function getIsMasks(): bool
    {
        return $this->isMasks;
    }

    public function getIsViewed(): bool
    {
        return $this->isViewed;
    }

    public function getStickers(): array
    {
        return $this->stickers;
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }
}
