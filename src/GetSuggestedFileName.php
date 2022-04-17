<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns suggested name for saving a file in a given directory
 */
class GetSuggestedFileName extends TdFunction
{
    public const TYPE_NAME = 'getSuggestedFileName';

    /**
     * Identifier of the file
     *
     * @var int
     */
    protected int $fileId;

    /**
     * Directory in which the file is supposed to be saved
     *
     * @var string
     */
    protected string $directory;

    public function __construct(int $fileId, string $directory)
    {
        $this->fileId = $fileId;
        $this->directory = $directory;
    }

    public static function fromArray(array $array): GetSuggestedFileName
    {
        return new static(
            $array['file_id'],
            $array['directory'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'directory' => $this->directory,
        ];
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }
}
