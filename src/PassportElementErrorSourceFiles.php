<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The list of attached files contains an error. The error will be considered resolved when the list of files changes
 */
class PassportElementErrorSourceFiles extends PassportElementErrorSource
{
    public const TYPE_NAME = 'passportElementErrorSourceFiles';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementErrorSourceFiles
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
