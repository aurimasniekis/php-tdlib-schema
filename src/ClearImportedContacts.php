<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Clears all imported contacts, contact list remains unchanged
 */
class ClearImportedContacts extends TdFunction
{
    public const TYPE_NAME = 'clearImportedContacts';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ClearImportedContacts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
