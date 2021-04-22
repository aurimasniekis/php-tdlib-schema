<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Adds a proxy server for network requests. Can be called before authorization.
 */
class AddProxy extends TdFunction
{
    public const TYPE_NAME = 'addProxy';

    /**
     * Proxy server IP address.
     */
    protected string $server;

    /**
     * Proxy server port.
     */
    protected int $port;

    /**
     * True, if the proxy should be enabled.
     */
    protected bool $enable;

    /**
     * Proxy type.
     */
    protected ProxyType $type;

    public function __construct(string $server, int $port, bool $enable, ProxyType $type)
    {
        $this->server = $server;
        $this->port   = $port;
        $this->enable = $enable;
        $this->type   = $type;
    }

    public static function fromArray(array $array): AddProxy
    {
        return new static(
            $array['server'],
            $array['port'],
            $array['enable'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'server' => $this->server,
            'port'   => $this->port,
            'enable' => $this->enable,
            'type'   => $this->type->typeSerialize(),
        ];
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
