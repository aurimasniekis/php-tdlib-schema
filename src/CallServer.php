<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a server for relaying call data.
 */
class CallServer extends TdObject
{
    public const TYPE_NAME = 'callServer';

    /**
     * Server identifier.
     */
    protected string $id;

    /**
     * Server IPv4 address.
     */
    protected string $ipAddress;

    /**
     * Server IPv6 address.
     */
    protected string $ipv6Address;

    /**
     * Server port number.
     */
    protected int $port;

    /**
     * Server type.
     */
    protected CallServerType $type;

    public function __construct(string $id, string $ipAddress, string $ipv6Address, int $port, CallServerType $type)
    {
        $this->id          = $id;
        $this->ipAddress   = $ipAddress;
        $this->ipv6Address = $ipv6Address;
        $this->port        = $port;
        $this->type        = $type;
    }

    public static function fromArray(array $array): CallServer
    {
        return new static(
            $array['id'],
            $array['ip_address'],
            $array['ipv6_address'],
            $array['port'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'id'           => $this->id,
            'ip_address'   => $this->ipAddress,
            'ipv6_address' => $this->ipv6Address,
            'port'         => $this->port,
            'type'         => $this->type->typeSerialize(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function getIpv6Address(): string
    {
        return $this->ipv6Address;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getType(): CallServerType
    {
        return $this->type;
    }
}
