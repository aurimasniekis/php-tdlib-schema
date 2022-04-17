<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Does nothing and ensures that the Update object is used; for testing only. This is an offline method. Can be called before authorization
 */
class TestUseUpdate extends TdFunction
{
    public const TYPE_NAME = 'testUseUpdate';

    public function __construct()
    {
    }

    public static function fromArray(array $array): TestUseUpdate
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
