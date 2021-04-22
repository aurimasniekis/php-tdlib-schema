<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A reference to a richTexts object on the same web page.
 */
class RichTextReference extends RichText
{
    public const TYPE_NAME = 'richTextReference';

    /**
     * The text.
     */
    protected RichText $text;

    /**
     * The name of a richTextAnchor object, which is the first element of the target richTexts object.
     */
    protected string $anchorName;

    /**
     * An HTTP URL, opening the reference.
     */
    protected string $url;

    public function __construct(RichText $text, string $anchorName, string $url)
    {
        parent::__construct();

        $this->text       = $text;
        $this->anchorName = $anchorName;
        $this->url        = $url;
    }

    public static function fromArray(array $array): RichTextReference
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['anchor_name'],
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'text'        => $this->text->typeSerialize(),
            'anchor_name' => $this->anchorName,
            'url'         => $this->url,
        ];
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function getAnchorName(): string
    {
        return $this->anchorName;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
