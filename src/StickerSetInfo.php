<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents short information about a sticker set.
 */
class StickerSetInfo extends TdObject
{
    public const TYPE_NAME = 'stickerSetInfo';

    /**
     * Identifier of the sticker set.
     *
     * @var string
     */
    protected string $id;

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
     * Sticker set thumbnail in WEBP format with width and height 100; may be null.
     *
     * @var PhotoSize|null
     */
    protected ?PhotoSize $thumbnail;

    /**
     * True, if the sticker set has been installed by current user.
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
     * Total number of stickers in the set.
     *
     * @var int
     */
    protected int $size;

    /**
     * Contains up to the first 5 stickers from the set, depending on the context. If the client needs more stickers the full set should be requested.
     *
     * @var Sticker[]
     */
    protected array $covers;

    public function __construct(
        string $id,
        string $title,
        string $name,
        ?PhotoSize $thumbnail,
        bool $isInstalled,
        bool $isArchived,
        bool $isOfficial,
        bool $isAnimated,
        bool $isMasks,
        bool $isViewed,
        int $size,
        array $covers
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
        $this->size        = $size;
        $this->covers      = $covers;
    }

    public static function fromArray(array $array): StickerSetInfo
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
            $array['size'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['covers']),
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
            'size'            => $this->size,
            array_map(fn ($x) => $x->typeSerialize(), $this->covers),
        ];
    }

    public function getId(): string
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

    public function getSize(): int
    {
        return $this->size;
    }

    public function getCovers(): array
    {
        return $this->covers;
    }
}
