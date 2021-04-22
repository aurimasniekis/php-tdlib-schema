<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Does nothing; for testing only. This is an offline method. Can be called before authorization
 */
class TestCallEmpty extends TdFunction
{
    public const TYPE_NAME = 'testCallEmpty';

    public function __construct()
    {
    }

    public static function fromArray(array $array): TestCallEmpty
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
