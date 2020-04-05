<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A rich text URL link.
 */
class RichTextUrl extends RichText
{
    public const TYPE_NAME = 'richTextUrl';

    /**
     * Text.
     *
     * @var RichText
     */
    protected RichText $text;

    /**
     * URL.
     *
     * @var string
     */
    protected string $url;

    /**
     * True, if the URL has cached instant view server-side.
     *
     * @var bool
     */
    protected bool $isCached;

    public function __construct(RichText $text, string $url, bool $isCached)
    {
        parent::__construct();

        $this->text     = $text;
        $this->url      = $url;
        $this->isCached = $isCached;
    }

    public static function fromArray(array $array): RichTextUrl
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['url'],
            $array['is_cached'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'text'      => $this->text->typeSerialize(),
            'url'       => $this->url,
            'is_cached' => $this->isCached,
        ];
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getIsCached(): bool
    {
        return $this->isCached;
    }
}
