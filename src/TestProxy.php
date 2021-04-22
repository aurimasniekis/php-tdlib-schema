<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends a simple network request to the Telegram servers via proxy; for testing only. Can be called before authorization
 */
class TestProxy extends TdFunction
{
    public const TYPE_NAME = 'testProxy';

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
     * Proxy type
     *
     * @var ProxyType
     */
    protected ProxyType $type;

    /**
     * Identifier of a datacenter, with which to test connection
     *
     * @var int
     */
    protected int $dcId;

    /**
     * The maximum overall timeout for the request
     *
     * @var float
     */
    protected float $timeout;

    public function __construct(string $server, int $port, ProxyType $type, int $dcId, float $timeout)
    {
        $this->server = $server;
        $this->port = $port;
        $this->type = $type;
        $this->dcId = $dcId;
        $this->timeout = $timeout;
    }

    public static function fromArray(array $array): TestProxy
    {
        return new static(
            $array['server'],
            $array['port'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['dc_id'],
            $array['timeout'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'server' => $this->server,
            'port' => $this->port,
            'type' => $this->type->typeSerialize(),
            'dc_id' => $this->dcId,
            'timeout' => $this->timeout,
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

    public function getDcId(): int
    {
        return $this->dcId;
    }

    public function getTimeout(): float
    {
        return $this->timeout;
    }
}
