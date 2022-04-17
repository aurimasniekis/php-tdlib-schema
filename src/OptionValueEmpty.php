<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents an unknown option or an option which has a default value
 */
class OptionValueEmpty extends OptionValue
{
    public const TYPE_NAME = 'optionValueEmpty';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): OptionValueEmpty
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
