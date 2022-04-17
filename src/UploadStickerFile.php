<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Uploads a file with a sticker; returns the uploaded file
 */
class UploadStickerFile extends TdFunction
{
    public const TYPE_NAME = 'uploadStickerFile';

    /**
     * Sticker file owner; ignored for regular users
     *
     * @var int
     */
    protected int $userId;

    /**
     * Sticker file to upload
     *
     * @var InputSticker
     */
    protected InputSticker $sticker;

    public function __construct(int $userId, InputSticker $sticker)
    {
        $this->userId = $userId;
        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): UploadStickerFile
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getSticker(): InputSticker
    {
        return $this->sticker;
    }
}
