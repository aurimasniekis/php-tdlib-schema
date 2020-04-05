<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The file contains an error. The error will be considered resolved when the file changes.
 */
class PassportElementErrorSourceFile extends PassportElementErrorSource
{
    public const TYPE_NAME = 'passportElementErrorSourceFile';

    /**
     * Index of a file with the error.
     *
     * @var int
     */
    protected int $fileIndex;

    public function __construct(int $fileIndex)
    {
        parent::__construct();

        $this->fileIndex = $fileIndex;
    }

    public static function fromArray(array $array): PassportElementErrorSourceFile
    {
        return new static(
            $array['file_index'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'file_index' => $this->fileIndex,
        ];
    }

    public function getFileIndex(): int
    {
        return $this->fileIndex;
    }
}
