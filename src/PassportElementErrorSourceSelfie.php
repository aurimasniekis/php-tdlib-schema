<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The selfie with the document contains an error. The error will be considered resolved when the file with the selfie changes.
 */
class PassportElementErrorSourceSelfie extends PassportElementErrorSource
{
    public const TYPE_NAME = 'passportElementErrorSourceSelfie';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementErrorSourceSelfie
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
