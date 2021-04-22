<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a public or private message link
 */
class GetMessageLinkInfo extends TdFunction
{
    public const TYPE_NAME = 'getMessageLinkInfo';

    /**
     * The message link in the format "https://t.me/c/...", or "tg://privatepost?...", or "https://t.me/username/...", or "tg://resolve?..."
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public static function fromArray(array $array): GetMessageLinkInfo
    {
        return new static(
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
