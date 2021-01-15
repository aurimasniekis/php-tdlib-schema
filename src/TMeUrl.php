<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a URL linking to an internal Telegram entity.
 */
class TMeUrl extends TdObject
{
    public const TYPE_NAME = 'tMeUrl';

    /**
     * URL.
     *
     * @var string
     */
    protected string $url;

    /**
     * Type of the URL.
     *
     * @var TMeUrlType
     */
    protected TMeUrlType $type;

    public function __construct(string $url, TMeUrlType $type)
    {
        $this->url  = $url;
        $this->type = $type;
    }

    public static function fromArray(array $array): TMeUrl
    {
        return new static(
            $array['url'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url'   => $this->url,
            'type'  => $this->type->typeSerialize(),
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getType(): TMeUrlType
    {
        return $this->type;
    }
}
