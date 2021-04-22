<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat is a private or secret chat and the other user can be added to the contact list using the method addContact.
 */
class ChatActionBarAddContact extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarAddContact';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionBarAddContact
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
