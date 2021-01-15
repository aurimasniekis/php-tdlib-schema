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
     *
     * @var InputFile
     */
    protected InputFile $document;

    /**
     * Document thumbnail, if available.
     *
     * @var InputThumbnail
     */
    protected InputThumbnail $thumbnail;

    /**
     * Document caption; 0-GetOption("message_caption_length_max") characters.
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    public function __construct(InputFile $document, InputThumbnail $thumbnail, FormattedText $caption)
    {
        parent::__construct();

        $this->document  = $document;
        $this->thumbnail = $thumbnail;
        $this->caption   = $caption;
    }

    public static function fromArray(array $array): InputMessageDocument
    {
        return new static(
            TdSchemaRegistry::fromArray($array['document']),
            TdSchemaRegistry::fromArray($array['thumbnail']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'document'  => $this->document->typeSerialize(),
            'thumbnail' => $this->thumbnail->typeSerialize(),
            'caption'   => $this->caption->typeSerialize(),
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

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
