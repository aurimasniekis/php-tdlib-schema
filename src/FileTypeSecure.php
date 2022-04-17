<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The file is a file from Secure storage used for storing Telegram Passport files
 */
class FileTypeSecure extends FileType
{
    public const TYPE_NAME = 'fileTypeSecure';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FileTypeSecure
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
