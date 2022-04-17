<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A button that sends the user's location when pressed; available only in private chats
 */
class KeyboardButtonTypeRequestLocation extends KeyboardButtonType
{
    public const TYPE_NAME = 'keyboardButtonTypeRequestLocation';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): KeyboardButtonTypeRequestLocation
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
