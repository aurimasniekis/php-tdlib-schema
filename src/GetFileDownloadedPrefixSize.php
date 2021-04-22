<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns file downloaded prefix size from a given offset
 */
class GetFileDownloadedPrefixSize extends TdFunction
{
    public const TYPE_NAME = 'getFileDownloadedPrefixSize';

    /**
     * Identifier of the file
     *
     * @var int
     */
    protected int $fileId;

    /**
     * Offset from which downloaded prefix size should be calculated
     *
     * @var int
     */
    protected int $offset;

    public function __construct(int $fileId, int $offset)
    {
        $this->fileId = $fileId;
        $this->offset = $offset;
    }

    public static function fromArray(array $array): GetFileDownloadedPrefixSize
    {
        return new static(
            $array['file_id'],
            $array['offset'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'offset' => $this->offset,
        ];
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }
}
