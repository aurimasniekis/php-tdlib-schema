<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The element contains an error in an unspecified place. The error will be considered resolved when new data is added.
 */
class PassportElementErrorSourceUnspecified extends PassportElementErrorSource
{
    public const TYPE_NAME = 'passportElementErrorSourceUnspecified';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementErrorSourceUnspecified
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
