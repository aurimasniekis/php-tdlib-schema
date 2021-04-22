<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user heard background noise
 */
class CallProblemNoise extends CallProblem
{
    public const TYPE_NAME = 'callProblemNoise';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallProblemNoise
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
