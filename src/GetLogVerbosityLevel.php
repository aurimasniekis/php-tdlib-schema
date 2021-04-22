<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns current verbosity level of the internal logging of TDLib. Can be called synchronously
 */
class GetLogVerbosityLevel extends TdFunction
{
    public const TYPE_NAME = 'getLogVerbosityLevel';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetLogVerbosityLevel
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
