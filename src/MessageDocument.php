<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A document message (general file)
 */
class MessageDocument extends MessageContent
{
    public const TYPE_NAME = 'messageDocument';

    /**
     * The document description
     *
     * @var Document
     */
    protected Document $document;

    /**
     * Document caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    public function __construct(Document $document, FormattedText $caption)
    {
        parent::__construct();

        $this->document = $document;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): MessageDocument
    {
        return new static(
            TdSchemaRegistry::fromArray($array['document']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'document' => $this->document->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
        ];
    }

    public function getDocument(): Document
    {
        return $this->document;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
