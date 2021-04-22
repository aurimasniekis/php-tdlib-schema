<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the type of an inline keyboard button.
 */
class InlineKeyboardButtonType extends TdObject
{
    public const TYPE_NAME = 'InlineKeyboardButtonType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InlineKeyboardButtonType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
