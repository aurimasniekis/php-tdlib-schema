<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A cashtag text, beginning with "$" and consisting of capital English letters (e.g., "$USD")
 */
class TextEntityTypeCashtag extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeCashtag';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeCashtag
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
