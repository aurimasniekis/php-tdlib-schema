<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks the database encryption key for correctness. Works only when the current authorization state is authorizationStateWaitEncryptionKey.
 */
class CheckDatabaseEncryptionKey extends TdFunction
{
    public const TYPE_NAME = 'checkDatabaseEncryptionKey';

    /**
     * Encryption key to check or set up.
     *
     * @var string
     */
    protected string $encryptionKey;

    public function __construct(string $encryptionKey)
    {
        $this->encryptionKey = $encryptionKey;
    }

    public static function fromArray(array $array): CheckDatabaseEncryptionKey
    {
        return new static(
            $array['encryption_key'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'encryption_key' => $this->encryptionKey,
        ];
    }

    public function getEncryptionKey(): string
    {
        return $this->encryptionKey;
    }
}
