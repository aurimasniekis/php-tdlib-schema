<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Edits an existing proxy server for network requests. Can be called before authorization
 */
class EditProxy extends TdFunction
{
    public const TYPE_NAME = 'editProxy';

    /**
     * Proxy identifier
     *
     * @var int
     */
    protected int $proxyId;

    /**
     * Proxy server IP address
     *
     * @var string
     */
    protected string $server;

    /**
     * Proxy server port
     *
     * @var int
     */
    protected int $port;

    /**
     * True, if the proxy needs to be enabled
     *
     * @var bool
     */
    protected bool $enable;

    /**
     * Proxy type
     *
     * @var ProxyType
     */
    protected ProxyType $type;

    public function __construct(int $proxyId, string $server, int $port, bool $enable, ProxyType $type)
    {
        $this->proxyId = $proxyId;
        $this->server = $server;
        $this->port = $port;
        $this->enable = $enable;
        $this->type = $type;
    }

    public static function fromArray(array $array): EditProxy
    {
        return new static(
            $array['proxy_id'],
            $array['server'],
            $array['port'],
            $array['enable'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'proxy_id' => $this->proxyId,
            'server' => $this->server,
            'port' => $this->port,
            'enable' => $this->enable,
            'type' => $this->type->typeSerialize(),
        ];
    }

    public function getProxyId(): int
    {
        return $this->proxyId;
    }

    public function getServer(): string
    {
        return $this->server;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getEnable(): bool
    {
        return $this->enable;
    }

    public function getType(): ProxyType
    {
        return $this->type;
    }
}
