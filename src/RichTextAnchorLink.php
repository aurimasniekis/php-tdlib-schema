<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A link to an anchor on the same web page
 */
class RichTextAnchorLink extends RichText
{
    public const TYPE_NAME = 'richTextAnchorLink';

    /**
     * The link text
     *
     * @var RichText
     */
    protected RichText $text;

    /**
     * The anchor name. If the name is empty, the link should bring back to top
     *
     * @var string
     */
    protected string $anchorName;

    /**
     * An HTTP URL, opening the anchor
     *
     * @var string
     */
    protected string $url;

    public function __construct(RichText $text, string $anchorName, string $url)
    {
        parent::__construct();

        $this->text = $text;
        $this->anchorName = $anchorName;
        $this->url = $url;
    }

    public static function fromArray(array $array): RichTextAnchorLink
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
            '@type' => static::TYPE_NAME,
            'text' => $this->text->typeSerialize(),
            'anchor_name' => $this->anchorName,
            'url' => $this->url,
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
