<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A document message (general file).
 */
class InputMessageDocument extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageDocument';

    /**
     * Document to be sent.
     */
    protected InputFile $document;

    /**
     * Document thumbnail, if available.
     */
    protected InputThumbnail $thumbnail;

    /**
     * If true, automatic file type detection will be disabled and the document will be always sent as file. Always true for files sent to secret chats.
     */
    protected bool $disableContentTypeDetection;

    /**
     * Document caption; 0-GetOption("message_caption_length_max") characters.
     */
    protected FormattedText $caption;

    public function __construct(InputFile $document, InputThumbnail $thumbnail, bool $disableContentTypeDetection, FormattedText $caption)
    {
        parent::__construct();

        $this->document                    = $document;
        $this->thumbnail                   = $thumbnail;
        $this->disableContentTypeDetection = $disableContentTypeDetection;
        $this->caption                     = $caption;
    }

    public static function fromArray(array $array): InputMessageDocument
    {
        return new static(
            TdSchemaRegistry::fromArray($array['document']),
            TdSchemaRegistry::fromArray($array['thumbnail']),
            $array['disable_content_type_detection'],
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'document'                       => $this->document->typeSerialize(),
            'thumbnail'                      => $this->thumbnail->typeSerialize(),
            'disable_content_type_detection' => $this->disableContentTypeDetection,
            'caption'                        => $this->caption->typeSerialize(),
        ];
    }

    public function getDocument(): InputFile
    {
        return $this->document;
    }

    public function getThumbnail(): InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getDisableContentTypeDetection(): bool
    {
        return $this->disableContentTypeDetection;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
