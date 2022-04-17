<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A HTTP transparent proxy server
 */
class ProxyTypeHttp extends ProxyType
{
    public const TYPE_NAME = 'proxyTypeHttp';

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

    /**
     * Pass true if the proxy supports only HTTP requests and doesn't support transparent TCP connections via HTTP CONNECT method
     *
     * @var bool
     */
    protected bool $httpOnly;

    public function __construct(string $username, string $password, bool $httpOnly)
    {
        parent::__construct();

        $this->username = $username;
        $this->password = $password;
        $this->httpOnly = $httpOnly;
    }

    public static function fromArray(array $array): ProxyTypeHttp
    {
        return new static(
            $array['username'],
            $array['password'],
            $array['http_only'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'username' => $this->username,
            'password' => $this->password,
            'http_only' => $this->httpOnly,
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

    public function getHttpOnly(): bool
    {
        return $this->httpOnly;
    }
}
