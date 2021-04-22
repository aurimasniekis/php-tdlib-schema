<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of t.me URLs.
 */
class TMeUrls extends TdObject
{
    public const TYPE_NAME = 'tMeUrls';

    /**
     * List of URLs.
     *
     * @var TMeUrl[]
     */
    protected array $urls;

    public function __construct(array $urls)
    {
        $this->urls = $urls;
    }

    public static function fromArray(array $array): TMeUrls
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['urls']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->urls),
        ];
    }

    public function getUrls(): array
    {
        return $this->urls;
    }
}
