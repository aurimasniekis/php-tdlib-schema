<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets a sticker set thumbnail; for bots only. Returns the sticker set
 */
class SetStickerSetThumbnail extends TdFunction
{
    public const TYPE_NAME = 'setStickerSetThumbnail';

    /**
     * Sticker set owner
     *
     * @var int
     */
    protected int $userId;

    /**
     * Sticker set name
     *
     * @var string
     */
    protected string $name;

    /**
     * Thumbnail to set in PNG or TGS format. Animated thumbnail must be set for animated sticker sets and only for them. Pass a zero InputFileId to delete the thumbnail
     *
     * @var InputFile
     */
    protected InputFile $thumbnail;

    public function __construct(int $userId, string $name, InputFile $thumbnail)
    {
        $this->userId = $userId;
        $this->name = $name;
        $this->thumbnail = $thumbnail;
    }

    public static function fromArray(array $array): SetStickerSetThumbnail
    {
        return new static(
            $array['user_id'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['thumbnail']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'name' => $this->name,
            'thumbnail' => $this->thumbnail->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getThumbnail(): InputFile
    {
        return $this->thumbnail;
    }
}
