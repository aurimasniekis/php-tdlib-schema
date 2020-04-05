<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A simple button, with text that should be sent when the button is pressed.
 */
class KeyboardButtonTypeText extends KeyboardButtonType
{
    public const TYPE_NAME = 'keyboardButtonTypeText';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): KeyboardButtonTypeText
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
