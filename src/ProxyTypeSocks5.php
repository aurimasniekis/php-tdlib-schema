<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A SOCKS5 proxy server
 */
class ProxyTypeSocks5 extends ProxyType
{
    public const TYPE_NAME = 'proxyTypeSocks5';

    /**
     * Username for logging in; may be empty
     *
     * @var string
     */
    protected string $username;

    /**
     * Password for logging in; may be empty
     *
     * @var string
     */
    protected string $password;

    public function __construct(string $username, string $password)
    {
        parent::__construct();

        $this->username = $username;
        $this->password = $password;
    }

    public static function fromArray(array $array): ProxyTypeSocks5
    {
        return new static(
            $array['username'],
            $array['password'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'username' => $this->username,
            'password' => $this->password,
        ];
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
