<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The file is a sticker
 */
class FileTypeSticker extends FileType
{
    public const TYPE_NAME = 'fileTypeSticker';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeSticker
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
