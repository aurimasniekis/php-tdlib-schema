<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The reverse side of the document contains an error. The error will be considered resolved when the file with the reverse side changes
 */
class PassportElementErrorSourceReverseSide extends PassportElementErrorSource
{
    public const TYPE_NAME = 'passportElementErrorSourceReverseSide';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementErrorSourceReverseSide
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
