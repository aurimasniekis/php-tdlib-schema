<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Stops the uploading of a file. Supported only for files uploaded by using uploadFile. For other files the behavior is undefined
 */
class CancelUploadFile extends TdFunction
{
    public const TYPE_NAME = 'cancelUploadFile';

    /**
     * Identifier of the file to stop uploading
     *
     * @var int
     */
    protected int $fileId;

    public function __construct(int $fileId)
    {
        $this->fileId = $fileId;
    }

    public static function fromArray(array $array): CancelUploadFile
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
