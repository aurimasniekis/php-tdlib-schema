<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A text description shown instead of a raw URL.
 */
class TextEntityTypeTextUrl extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeTextUrl';

    /**
     * HTTP or tg:// URL to be opened when the link is clicked.
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url)
    {
        parent::__construct();

        $this->url = $url;
    }

    public static function fromArray(array $array): TextEntityTypeTextUrl
    {
        return new static(
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url'   => $this->url,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
