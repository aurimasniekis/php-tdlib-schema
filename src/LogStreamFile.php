<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The log is written to a file.
 */
class LogStreamFile extends LogStream
{
    public const TYPE_NAME = 'logStreamFile';

    /**
     * Path to the file to where the internal TDLib log will be written.
     *
     * @var string
     */
    protected string $path;

    /**
     * The maximum size of the file to where the internal TDLib log is written before the file will be auto-rotated.
     *
     * @var int
     */
    protected int $maxFileSize;

    public function __construct(string $path, int $maxFileSize)
    {
        parent::__construct();

        $this->path        = $path;
        $this->maxFileSize = $maxFileSize;
    }

    public static function fromArray(array $array): LogStreamFile
    {
        return new static(
            $array['path'],
            $array['max_file_size'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'path'          => $this->path,
            'max_file_size' => $this->maxFileSize,
        ];
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getMaxFileSize(): int
    {
        return $this->maxFileSize;
    }
}
