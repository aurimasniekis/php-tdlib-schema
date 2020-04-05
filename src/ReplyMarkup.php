<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a description of a custom keyboard and actions that can be done with it to quickly reply to bots.
 */
class ReplyMarkup extends TdObject
{
    public const TYPE_NAME = 'ReplyMarkup';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ReplyMarkup
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
