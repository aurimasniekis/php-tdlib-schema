<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The file is a video note.
 */
class FileTypeVideoNote extends FileType
{
    public const TYPE_NAME = 'fileTypeVideoNote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeVideoNote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
