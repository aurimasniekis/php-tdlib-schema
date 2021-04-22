<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * TDLib needs an encryption key to decrypt the local database
 */
class AuthorizationStateWaitEncryptionKey extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitEncryptionKey';

    /**
     * True, if the database is currently encrypted
     *
     * @var bool
     */
    protected bool $isEncrypted;

    public function __construct(bool $isEncrypted)
    {
        parent::__construct();

        $this->isEncrypted = $isEncrypted;
    }

    public static function fromArray(array $array): AuthorizationStateWaitEncryptionKey
    {
        return new static(
            $array['is_encrypted'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_encrypted' => $this->isEncrypted,
        ];
    }

    public function getIsEncrypted(): bool
    {
        return $this->isEncrypted;
    }
}
