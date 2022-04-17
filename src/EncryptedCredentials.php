<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains encrypted Telegram Passport data credentials
 */
class EncryptedCredentials extends TdObject
{
    public const TYPE_NAME = 'encryptedCredentials';

    /**
     * The encrypted credentials
     *
     * @var string
     */
    protected string $data;

    /**
     * The decrypted data hash
     *
     * @var string
     */
    protected string $hash;

    /**
     * Secret for data decryption, encrypted with the service's public key
     *
     * @var string
     */
    protected string $secret;

    public function __construct(string $data, string $hash, string $secret)
    {
        $this->data = $data;
        $this->hash = $hash;
        $this->secret = $secret;
    }

    public static function fromArray(array $array): EncryptedCredentials
    {
        return new static(
            $array['data'],
            $array['hash'],
            $array['secret'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'data' => $this->data,
            'hash' => $this->hash,
            'secret' => $this->secret,
        ];
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }
}
