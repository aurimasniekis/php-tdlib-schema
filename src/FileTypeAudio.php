<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The file is an audio file
 */
class FileTypeAudio extends FileType
{
    public const TYPE_NAME = 'fileTypeAudio';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeAudio
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
