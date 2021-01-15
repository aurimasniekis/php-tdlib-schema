<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A dice message.
 */
class InputMessageDice extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageDice';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageDice
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
