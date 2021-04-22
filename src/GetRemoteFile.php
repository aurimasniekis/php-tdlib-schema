<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a file by its remote ID; this is an offline request. Can be used to register a URL as a file for further uploading, or sending as a message. Even the request succeeds, the file can be used only if it is still accessible to the user. For example, if the file is from a message, then the message must be not deleted and accessible to the user. If the file database is disabled, then the corresponding object with the file must be preloaded by the application
 */
class GetRemoteFile extends TdFunction
{
    public const TYPE_NAME = 'getRemoteFile';

    /**
     * Remote identifier of the file to get
     *
     * @var string
     */
    protected string $remoteFileId;

    /**
     * File type, if known
     *
     * @var FileType
     */
    protected FileType $fileType;

    public function __construct(string $remoteFileId, FileType $fileType)
    {
        $this->remoteFileId = $remoteFileId;
        $this->fileType = $fileType;
    }

    public static function fromArray(array $array): GetRemoteFile
    {
        return new static(
            $array['remote_file_id'],
            TdSchemaRegistry::fromArray($array['file_type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'remote_file_id' => $this->remoteFileId,
            'file_type' => $this->fileType->typeSerialize(),
        ];
    }

    public function getRemoteFileId(): string
    {
        return $this->remoteFileId;
    }

    public function getFileType(): FileType
    {
        return $this->fileType;
    }
}
