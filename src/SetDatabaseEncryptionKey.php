<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the database encryption key. Usually the encryption key is never changed and is stored in some OS keychain.
 */
class SetDatabaseEncryptionKey extends TdFunction
{
    public const TYPE_NAME = 'setDatabaseEncryptionKey';

    /**
     * New encryption key.
     */
    protected string $newEncryptionKey;

    public function __construct(string $newEncryptionKey)
    {
        $this->newEncryptionKey = $newEncryptionKey;
    }

    public static function fromArray(array $array): SetDatabaseEncryptionKey
    {
        return new static(
            $array['new_encryption_key'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'new_encryption_key' => $this->newEncryptionKey,
        ];
    }

    public function getNewEncryptionKey(): string
    {
        return $this->newEncryptionKey;
    }
}
