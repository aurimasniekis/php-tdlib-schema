<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Stops the downloading of a file. If a file has already been downloaded, does nothing.
 */
class CancelDownloadFile extends TdFunction
{
    public const TYPE_NAME = 'cancelDownloadFile';

    /**
     * Identifier of a file to stop downloading.
     */
    protected int $fileId;

    /**
     * Pass true to stop downloading only if it hasn't been started, i.e. request hasn't been sent to server.
     */
    protected bool $onlyIfPending;

    public function __construct(int $fileId, bool $onlyIfPending)
    {
        $this->fileId        = $fileId;
        $this->onlyIfPending = $onlyIfPending;
    }

    public static function fromArray(array $array): CancelDownloadFile
    {
        return new static(
            $array['file_id'],
            $array['only_if_pending'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'file_id'         => $this->fileId,
            'only_if_pending' => $this->onlyIfPending,
        ];
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getOnlyIfPending(): bool
    {
        return $this->onlyIfPending;
    }
}
