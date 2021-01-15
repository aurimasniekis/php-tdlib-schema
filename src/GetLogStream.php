<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about currently used log stream for internal logging of TDLib. This is an offline method. Can be called before authorization. Can be called synchronously.
 */
class GetLogStream extends TdFunction
{
    public const TYPE_NAME = 'getLogStream';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetLogStream
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
