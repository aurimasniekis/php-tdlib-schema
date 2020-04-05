<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user couldn't hear the other side.
 */
class CallProblemSilentLocal extends CallProblem
{
    public const TYPE_NAME = 'callProblemSilentLocal';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallProblemSilentLocal
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
