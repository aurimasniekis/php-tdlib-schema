<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains the storage usage statistics for a specific file type
 */
class StorageStatisticsByFileType extends TdObject
{
    public const TYPE_NAME = 'storageStatisticsByFileType';

    /**
     * File type
     *
     * @var FileType
     */
    protected FileType $fileType;

    /**
     * Total size of the files
     *
     * @var int
     */
    protected int $size;

    /**
     * Total number of files
     *
     * @var int
     */
    protected int $count;

    public function __construct(FileType $fileType, int $size, int $count)
    {
        $this->fileType = $fileType;
        $this->size = $size;
        $this->count = $count;
    }

    public static function fromArray(array $array): StorageStatisticsByFileType
    {
        return new static(
            TdSchemaRegistry::fromArray($array['file_type']),
            $array['size'],
            $array['count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_type' => $this->fileType->typeSerialize(),
            'size' => $this->size,
            'count' => $this->count,
        ];
    }

    public function getFileType(): FileType
    {
        return $this->fileType;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
