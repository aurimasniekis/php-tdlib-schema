<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains an HTTP URL.
 */
class HttpUrl extends TdObject
{
    public const TYPE_NAME = 'httpUrl';

    /**
     * The URL.
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public static function fromArray(array $array): HttpUrl
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
