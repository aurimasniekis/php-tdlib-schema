<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The translation of the document contains an error. The error is considered resolved when the list of files changes.
 */
class InputPassportElementErrorSourceTranslationFiles extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceTranslationFiles';

    /**
     * Current hashes of all files with the translation.
     *
     * @var string[]
     */
    protected array $fileHashes;

    public function __construct(array $fileHashes)
    {
        parent::__construct();

        $this->fileHashes = $fileHashes;
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceTranslationFiles
    {
        return new static(
            $array['file_hashes'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'file_hashes' => $this->fileHashes,
        ];
    }

    public function getFileHashes(): array
    {
        return $this->fileHashes;
    }
}
