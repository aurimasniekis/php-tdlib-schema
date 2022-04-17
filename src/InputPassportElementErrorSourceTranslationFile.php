<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * One of the files containing the translation of the document contains an error. The error is considered resolved when the file with the translation changes
 */
class InputPassportElementErrorSourceTranslationFile extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceTranslationFile';

    /**
     * Current hash of the file containing the translation
     *
     * @var string
     */
    protected string $fileHash;

    public function __construct(string $fileHash)
    {
        parent::__construct();

        $this->fileHash = $fileHash;
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceTranslationFile
    {
        return new static(
            $array['file_hash'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_hash' => $this->fileHash,
        ];
    }

    public function getFileHash(): string
    {
        return $this->fileHash;
    }
}
