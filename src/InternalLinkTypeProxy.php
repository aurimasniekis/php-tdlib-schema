<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to a proxy. Call addProxy with the given parameters to process the link and add the proxy
 */
class InternalLinkTypeProxy extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeProxy';

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
     * Type of the proxy
     *
     * @var ProxyType
     */
    protected ProxyType $type;

    public function __construct(string $server, int $port, ProxyType $type)
    {
        parent::__construct();

        $this->server = $server;
        $this->port = $port;
        $this->type = $type;
    }

    public static function fromArray(array $array): InternalLinkTypeProxy
    {
        return new static(
            $array['server'],
            $array['port'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'server' => $this->server,
            'port' => $this->port,
            'type' => $this->type->typeSerialize(),
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

    public function getType(): ProxyType
    {
        return $this->type;
    }
}
