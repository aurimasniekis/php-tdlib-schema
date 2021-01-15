<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a document of any type.
 */
class Document extends TdObject
{
    public const TYPE_NAME = 'document';

    /**
     * Original name of the file; as defined by the sender.
     */
    protected string $fileName;

    /**
     * MIME type of the file; as defined by the sender.
     */
    protected string $mimeType;

    /**
     * Document minithumbnail; may be null.
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * Document thumbnail in JPEG or PNG format (PNG will be used only for background patterns); as defined by the sender; may be null.
     */
    protected ?Thumbnail $thumbnail;

    /**
     * File containing the document.
     */
    protected File $document;

    public function __construct(string $fileName, string $mimeType, ?Minithumbnail $minithumbnail, ?Thumbnail $thumbnail, File $document)
    {
        $this->fileName      = $fileName;
        $this->mimeType      = $mimeType;
        $this->minithumbnail = $minithumbnail;
        $this->thumbnail     = $thumbnail;
        $this->document      = $document;
    }

    public static function fromArray(array $array): Document
    {
        return new static(
            $array['file_name'],
            $array['mime_type'],
            (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            TdSchemaRegistry::fromArray($array['document']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'file_name'     => $this->fileName,
            'mime_type'     => $this->mimeType,
            'minithumbnail' => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            'thumbnail'     => (isset($this->thumbnail) ? $this->thumbnail : null),
            'document'      => $this->document->typeSerialize(),
        ];
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getDocument(): File
    {
        return $this->document;
    }
}
