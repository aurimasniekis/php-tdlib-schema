<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes a file from the TDLib file cache
 */
class DeleteFile extends TdFunction
{
    public const TYPE_NAME = 'deleteFile';

    /**
     * Identifier of the file to delete
     *
     * @var int
     */
    protected int $fileId;

    public function __construct(int $fileId)
    {
        $this->fileId = $fileId;
    }

    public static function fromArray(array $array): DeleteFile
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
