<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the address of UDP reflectors.
 */
class CallConnection extends TdObject
{
    public const TYPE_NAME = 'callConnection';

    /**
     * Reflector identifier.
     *
     * @var string
     */
    protected string $id;

    /**
     * IPv4 reflector address.
     *
     * @var string
     */
    protected string $ip;

    /**
     * IPv6 reflector address.
     *
     * @var string
     */
    protected string $ipv6;

    /**
     * Reflector port number.
     *
     * @var int
     */
    protected int $port;

    /**
     * Connection peer tag.
     *
     * @var string
     */
    protected string $peerTag;

    public function __construct(string $id, string $ip, string $ipv6, int $port, string $peerTag)
    {
        $this->id      = $id;
        $this->ip      = $ip;
        $this->ipv6    = $ipv6;
        $this->port    = $port;
        $this->peerTag = $peerTag;
    }

    public static function fromArray(array $array): CallConnection
    {
        return new static(
            $array['id'],
            $array['ip'],
            $array['ipv6'],
            $array['port'],
            $array['peer_tag'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'id'       => $this->id,
            'ip'       => $this->ip,
            'ipv6'     => $this->ipv6,
            'port'     => $this->port,
            'peer_tag' => $this->peerTag,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function getIpv6(): string
    {
        return $this->ipv6;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getPeerTag(): string
    {
        return $this->peerTag;
    }
}
