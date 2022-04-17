<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a point on the map
 */
class InlineQueryResultLocation extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultLocation';

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * Location result
     *
     * @var Location
     */
    protected Location $location;

    /**
     * Title of the result
     *
     * @var string
     */
    protected string $title;

    /**
     * Result thumbnail in JPEG format; may be null
     *
     * @var Thumbnail|null
     */
    protected ?Thumbnail $thumbnail;

    public function __construct(string $id, Location $location, string $title, ?Thumbnail $thumbnail)
    {
        parent::__construct();

        $this->id = $id;
        $this->location = $location;
        $this->title = $title;
        $this->thumbnail = $thumbnail;
    }

    public static function fromArray(array $array): InlineQueryResultLocation
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['location']),
            $array['title'],
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'location' => $this->location->typeSerialize(),
            'title' => $this->title,
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }
}
