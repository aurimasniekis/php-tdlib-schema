<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A rich text reference of a text on the same web page.
 */
class RichTextReference extends RichText
{
    public const TYPE_NAME = 'richTextReference';

    /**
     * The text.
     *
     * @var RichText
     */
    protected RichText $text;

    /**
     * The text to show on click.
     *
     * @var RichText
     */
    protected RichText $referenceText;

    /**
     * An HTTP URL, opening the reference.
     *
     * @var string
     */
    protected string $url;

    public function __construct(RichText $text, RichText $referenceText, string $url)
    {
        parent::__construct();

        $this->text          = $text;
        $this->referenceText = $referenceText;
        $this->url           = $url;
    }

    public static function fromArray(array $array): RichTextReference
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            TdSchemaRegistry::fromArray($array['reference_text']),
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'text'           => $this->text->typeSerialize(),
            'reference_text' => $this->referenceText->typeSerialize(),
            'url'            => $this->url,
        ];
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function getReferenceText(): RichText
    {
        return $this->referenceText;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
