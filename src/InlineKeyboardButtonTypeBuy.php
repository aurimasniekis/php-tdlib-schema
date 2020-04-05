<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A button to buy something. This button must be in the first column and row of the keyboard and can be attached only to a message with content of the type messageInvoice.
 */
class InlineKeyboardButtonTypeBuy extends InlineKeyboardButtonType
{
    public const TYPE_NAME = 'inlineKeyboardButtonTypeBuy';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeBuy
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
