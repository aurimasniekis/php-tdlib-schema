<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The list of attached files contains an error. The error is considered resolved when the file list changes
 */
class InputPassportElementErrorSourceFiles extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceFiles';

    /**
     * Current hashes of all attached files
     *
     * @var string[]
     */
    protected array $fileHashes;

    public function __construct(array $fileHashes)
    {
        parent::__construct();

        $this->fileHashes = $fileHashes;
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceFiles
    {
        return new static(
            $array['file_hashes'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_hashes' => $this->fileHashes,
        ];
    }

    public function getFileHashes(): array
    {
        return $this->fileHashes;
    }
}
