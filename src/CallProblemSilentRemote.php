<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The other side couldn't hear the user
 */
class CallProblemSilentRemote extends CallProblem
{
    public const TYPE_NAME = 'callProblemSilentRemote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallProblemSilentRemote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
