<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about the total amount of data that was used to send and receive files
 */
class NetworkStatisticsEntryFile extends NetworkStatisticsEntry
{
    public const TYPE_NAME = 'networkStatisticsEntryFile';

    /**
     * Type of the file the data is part of
     *
     * @var FileType
     */
    protected FileType $fileType;

    /**
     * Type of the network the data was sent through. Call setNetworkType to maintain the actual network type
     *
     * @var NetworkType
     */
    protected NetworkType $networkType;

    /**
     * Total number of bytes sent
     *
     * @var int
     */
    protected int $sentBytes;

    /**
     * Total number of bytes received
     *
     * @var int
     */
    protected int $receivedBytes;

    public function __construct(FileType $fileType, NetworkType $networkType, int $sentBytes, int $receivedBytes)
    {
        parent::__construct();

        $this->fileType = $fileType;
        $this->networkType = $networkType;
        $this->sentBytes = $sentBytes;
        $this->receivedBytes = $receivedBytes;
    }

    public static function fromArray(array $array): NetworkStatisticsEntryFile
    {
        return new static(
            TdSchemaRegistry::fromArray($array['file_type']),
            TdSchemaRegistry::fromArray($array['network_type']),
            $array['sent_bytes'],
            $array['received_bytes'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_type' => $this->fileType->typeSerialize(),
            'network_type' => $this->networkType->typeSerialize(),
            'sent_bytes' => $this->sentBytes,
            'received_bytes' => $this->receivedBytes,
        ];
    }

    public function getFileType(): FileType
    {
        return $this->fileType;
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
}
