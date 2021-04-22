<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Uploads a PNG image with a sticker; for bots only; returns the uploaded file
 */
class UploadStickerFile extends TdFunction
{
    public const TYPE_NAME = 'uploadStickerFile';

    /**
     * Sticker file owner
     *
     * @var int
     */
    protected int $userId;

    /**
     * PNG image with the sticker; must be up to 512 KB in size and fit in 512x512 square
     *
     * @var InputFile
     */
    protected InputFile $pngSticker;

    public function __construct(int $userId, InputFile $pngSticker)
    {
        $this->userId = $userId;
        $this->pngSticker = $pngSticker;
    }

    public static function fromArray(array $array): UploadStickerFile
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['png_sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'png_sticker' => $this->pngSticker->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getPngSticker(): InputFile
    {
        return $this->pngSticker;
    }
}
