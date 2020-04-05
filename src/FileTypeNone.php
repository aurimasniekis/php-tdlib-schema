<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The data is not a file.
 */
class FileTypeNone extends FileType
{
    public const TYPE_NAME = 'fileTypeNone';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeNone
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
