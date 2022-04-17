<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of sticker sets attached to a file. Currently, only photos and videos can have attached sticker sets
 */
class GetAttachedStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getAttachedStickerSets';

    /**
     * File identifier
     *
     * @var int
     */
    protected int $fileId;

    public function __construct(int $fileId)
    {
        $this->fileId = $fileId;
    }

    public static function fromArray(array $array): GetAttachedStickerSets
    {
        return new static(
            $array['file_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
        ];
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }
}
