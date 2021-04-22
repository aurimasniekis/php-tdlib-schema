<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Asynchronously uploads a file to the cloud without sending it in a message. updateFile will be used to notify about upload progress and successful completion of the upload. The file will not have a persistent remote identifier until it will be sent in a message
 */
class UploadFile extends TdFunction
{
    public const TYPE_NAME = 'uploadFile';

    /**
     * File to upload
     *
     * @var InputFile
     */
    protected InputFile $file;

    /**
     * File type
     *
     * @var FileType
     */
    protected FileType $fileType;

    /**
     * Priority of the upload (1-32). The higher the priority, the earlier the file will be uploaded. If the priorities of two files are equal, then the first one for which uploadFile was called will be uploaded first
     *
     * @var int
     */
    protected int $priority;

    public function __construct(InputFile $file, FileType $fileType, int $priority)
    {
        $this->file = $file;
        $this->fileType = $fileType;
        $this->priority = $priority;
    }

    public static function fromArray(array $array): UploadFile
    {
        return new static(
            TdSchemaRegistry::fromArray($array['file']),
            TdSchemaRegistry::fromArray($array['file_type']),
            $array['priority'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file' => $this->file->typeSerialize(),
            'file_type' => $this->fileType->typeSerialize(),
            'priority' => $this->priority,
        ];
    }

    public function getFile(): InputFile
    {
        return $this->file;
    }

    public function getFileType(): FileType
    {
        return $this->fileType;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }
}
