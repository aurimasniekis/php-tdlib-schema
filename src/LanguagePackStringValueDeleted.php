<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A deleted language pack string, the value must be taken from the built-in English language pack
 */
class LanguagePackStringValueDeleted extends LanguagePackStringValue
{
    public const TYPE_NAME = 'languagePackStringValueDeleted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): LanguagePackStringValueDeleted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
