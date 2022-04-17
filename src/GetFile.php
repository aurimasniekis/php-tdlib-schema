<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a file; this is an offline request
 */
class GetFile extends TdFunction
{
    public const TYPE_NAME = 'getFile';

    /**
     * Identifier of the file to get
     *
     * @var int
     */
    protected int $fileId;

    public function __construct(int $fileId)
    {
        $this->fileId = $fileId;
    }

    public static function fromArray(array $array): GetFile
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
