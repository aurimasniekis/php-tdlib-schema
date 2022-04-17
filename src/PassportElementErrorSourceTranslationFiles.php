<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The translation of the document contains an error. The error will be considered resolved when the list of translation files changes
 */
class PassportElementErrorSourceTranslationFiles extends PassportElementErrorSource
{
    public const TYPE_NAME = 'passportElementErrorSourceTranslationFiles';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementErrorSourceTranslationFiles
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
