<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about the total amount of data that was used for calls.
 */
class NetworkStatisticsEntryCall extends NetworkStatisticsEntry
{
    public const TYPE_NAME = 'networkStatisticsEntryCall';

    /**
     * Type of the network the data was sent through. Call setNetworkType to maintain the actual network type.
     *
     * @var NetworkType
     */
    protected NetworkType $networkType;

    /**
     * Total number of bytes sent.
     *
     * @var int
     */
    protected int $sentBytes;

    /**
     * Total number of bytes received.
     *
     * @var int
     */
    protected int $receivedBytes;

    /**
     * Total call duration, in seconds.
     *
     * @var float
     */
    protected float $duration;

    public function __construct(NetworkType $networkType, int $sentBytes, int $receivedBytes, float $duration)
    {
        parent::__construct();

        $this->networkType   = $networkType;
        $this->sentBytes     = $sentBytes;
        $this->receivedBytes = $receivedBytes;
        $this->duration      = $duration;
    }

    public static function fromArray(array $array): NetworkStatisticsEntryCall
    {
        return new static(
            TdSchemaRegistry::fromArray($array['network_type']),
            $array['sent_bytes'],
            $array['received_bytes'],
            $array['duration'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'network_type'   => $this->networkType->typeSerialize(),
            'sent_bytes'     => $this->sentBytes,
            'received_bytes' => $this->receivedBytes,
            'duration'       => $this->duration,
        ];
    }

    public function getNetworkType(): NetworkType
    {
        return $this->networkType;
    }

    public function getSentBytes(): int
    {
        return $this->sentBytes;
    }

    public function getReceivedBytes(): int
    {
        return $this->receivedBytes;
    }

    public function getDuration(): float
    {
        return $this->duration;
    }
}
