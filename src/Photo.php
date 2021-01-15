<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a photo.
 */
class Photo extends TdObject
{
    public const TYPE_NAME = 'photo';

    /**
     * True, if stickers were added to the photo.
     *
     * @var bool
     */
    protected bool $hasStickers;

    /**
     * Photo minithumbnail; may be null.
     *
     * @var Minithumbnail|null
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * Available variants of the photo, in different sizes.
     *
     * @var PhotoSize[]
     */
    protected array $sizes;

    public function __construct(bool $hasStickers, ?Minithumbnail $minithumbnail, array $sizes)
    {
        $this->hasStickers   = $hasStickers;
        $this->minithumbnail = $minithumbnail;
        $this->sizes         = $sizes;
    }

    public static function fromArray(array $array): Photo
    {
        return new static(
            $array['has_stickers'],
            (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['sizes']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'has_stickers'    => $this->hasStickers,
            'minithumbnail'   => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            array_map(fn ($x) => $x->typeSerialize(), $this->sizes),
        ];
    }

    public function getHasStickers(): bool
    {
        return $this->hasStickers;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getSizes(): array
    {
        return $this->sizes;
    }
}
