<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Forces an updates.getDifference call to the Telegram servers; for testing only.
 */
class TestGetDifference extends TdFunction
{
    public const TYPE_NAME = 'testGetDifference';

    public function __construct()
    {
    }

    public static function fromArray(array $array): TestGetDifference
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
