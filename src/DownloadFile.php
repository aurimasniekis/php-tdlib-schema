<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Downloads a file from the cloud. Download progress and completion of the download will be notified through updateFile updates.
 */
class DownloadFile extends TdFunction
{
    public const TYPE_NAME = 'downloadFile';

    /**
     * Identifier of the file to download.
     *
     * @var int
     */
    protected int $fileId;

    /**
     * Priority of the download (1-32). The higher the priority, the earlier the file will be downloaded. If the priorities of two files are equal, then the last one for which downloadFile was called will be downloaded first.
     *
     * @var int
     */
    protected int $priority;

    /**
     * The starting position from which the file should be downloaded.
     *
     * @var int
     */
    protected int $offset;

    /**
     * Number of bytes which should be downloaded starting from the "offset" position before the download will be automatically cancelled; use 0 to download without a limit.
     *
     * @var int
     */
    protected int $limit;

    /**
     * If false, this request returns file state just after the download has been started. If true, this request returns file state only after the download has succeeded, has failed, has been cancelled or a new downloadFile request with different offset/limit parameters was sent.
     *
     * @var bool
     */
    protected bool $synchronous;

    public function __construct(int $fileId, int $priority, int $offset, int $limit, bool $synchronous)
    {
        $this->fileId      = $fileId;
        $this->priority    = $priority;
        $this->offset      = $offset;
        $this->limit       = $limit;
        $this->synchronous = $synchronous;
    }

    public static function fromArray(array $array): DownloadFile
    {
        return new static(
            $array['file_id'],
            $array['priority'],
            $array['offset'],
            $array['limit'],
            $array['synchronous'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'file_id'     => $this->fileId,
            'priority'    => $this->priority,
            'offset'      => $this->offset,
            'limit'       => $this->limit,
            'synchronous' => $this->synchronous,
        ];
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getSynchronous(): bool
    {
        return $this->synchronous;
    }
}
