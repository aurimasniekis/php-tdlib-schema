<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a proxy server.
 */
class Proxy extends TdObject
{
    public const TYPE_NAME = 'proxy';

    /**
     * Unique identifier of the proxy.
     */
    protected int $id;

    /**
     * Proxy server IP address.
     */
    protected string $server;

    /**
     * Proxy server port.
     */
    protected int $port;

    /**
     * Point in time (Unix timestamp) when the proxy was last used; 0 if never.
     */
    protected int $lastUsedDate;

    /**
     * True, if the proxy is enabled now.
     */
    protected bool $isEnabled;

    /**
     * Type of the proxy.
     */
    protected ProxyType $type;

    public function __construct(int $id, string $server, int $port, int $lastUsedDate, bool $isEnabled, ProxyType $type)
    {
        $this->id           = $id;
        $this->server       = $server;
        $this->port         = $port;
        $this->lastUsedDate = $lastUsedDate;
        $this->isEnabled    = $isEnabled;
        $this->type         = $type;
    }

    public static function fromArray(array $array): Proxy
    {
        return new static(
            $array['id'],
            $array['server'],
            $array['port'],
            $array['last_used_date'],
            $array['is_enabled'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'id'             => $this->id,
            'server'         => $this->server,
            'port'           => $this->port,
            'last_used_date' => $this->lastUsedDate,
            'is_enabled'     => $this->isEnabled,
            'type'           => $this->type->typeSerialize(),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getServer(): string
    {
        return $this->server;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getLastUsedDate(): int
    {
        return $this->lastUsedDate;
    }

    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getType(): ProxyType
    {
        return $this->type;
    }
}
