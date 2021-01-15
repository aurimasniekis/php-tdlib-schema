<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a join response candidate for interaction with tgcalls.
 */
class GroupCallJoinResponseCandidate extends TdObject
{
    public const TYPE_NAME = 'groupCallJoinResponseCandidate';

    /**
     * Value of the field port.
     */
    protected string $port;

    /**
     * Value of the field protocol.
     */
    protected string $protocol;

    /**
     * Value of the field network.
     */
    protected string $network;

    /**
     * Value of the field generation.
     */
    protected string $generation;

    /**
     * Value of the field id.
     */
    protected string $id;

    /**
     * Value of the field component.
     */
    protected string $component;

    /**
     * Value of the field foundation.
     */
    protected string $foundation;

    /**
     * Value of the field priority.
     */
    protected string $priority;

    /**
     * Value of the field ip.
     */
    protected string $ip;

    /**
     * Value of the field type.
     */
    protected string $type;

    /**
     * Value of the field tcp_type.
     */
    protected string $tcpType;

    /**
     * Value of the field rel_addr.
     */
    protected string $relAddr;

    /**
     * Value of the field rel_port.
     */
    protected string $relPort;

    public function __construct(
        string $port,
        string $protocol,
        string $network,
        string $generation,
        string $id,
        string $component,
        string $foundation,
        string $priority,
        string $ip,
        string $type,
        string $tcpType,
        string $relAddr,
        string $relPort
    ) {
        $this->port       = $port;
        $this->protocol   = $protocol;
        $this->network    = $network;
        $this->generation = $generation;
        $this->id         = $id;
        $this->component  = $component;
        $this->foundation = $foundation;
        $this->priority   = $priority;
        $this->ip         = $ip;
        $this->type       = $type;
        $this->tcpType    = $tcpType;
        $this->relAddr    = $relAddr;
        $this->relPort    = $relPort;
    }

    public static function fromArray(array $array): GroupCallJoinResponseCandidate
    {
        return new static(
            $array['port'],
            $array['protocol'],
            $array['network'],
            $array['generation'],
            $array['id'],
            $array['component'],
            $array['foundation'],
            $array['priority'],
            $array['ip'],
            $array['type'],
            $array['tcp_type'],
            $array['rel_addr'],
            $array['rel_port'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'port'       => $this->port,
            'protocol'   => $this->protocol,
            'network'    => $this->network,
            'generation' => $this->generation,
            'id'         => $this->id,
            'component'  => $this->component,
            'foundation' => $this->foundation,
            'priority'   => $this->priority,
            'ip'         => $this->ip,
            'type'       => $this->type,
            'tcp_type'   => $this->tcpType,
            'rel_addr'   => $this->relAddr,
            'rel_port'   => $this->relPort,
        ];
    }

    public function getPort(): string
    {
        return $this->port;
    }

    public function getProtocol(): string
    {
        return $this->protocol;
    }

    public function getNetwork(): string
    {
        return $this->network;
    }

    public function getGeneration(): string
    {
        return $this->generation;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getComponent(): string
    {
        return $this->component;
    }

    public function getFoundation(): string
    {
        return $this->foundation;
    }

    public function getPriority(): string
    {
        return $this->priority;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTcpType(): string
    {
        return $this->tcpType;
    }

    public function getRelAddr(): string
    {
        return $this->relAddr;
    }

    public function getRelPort(): string
    {
        return $this->relPort;
    }
}
