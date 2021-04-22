<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents information about a venue.
 */
class InlineQueryResultVenue extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultVenue';

    /**
     * Unique identifier of the query result.
     */
    protected string $id;

    /**
     * Venue result.
     */
    protected Venue $venue;

    /**
     * Result thumbnail in JPEG format; may be null.
     */
    protected ?Thumbnail $thumbnail;

    public function __construct(string $id, Venue $venue, ?Thumbnail $thumbnail)
    {
        parent::__construct();

        $this->id        = $id;
        $this->venue     = $venue;
        $this->thumbnail = $thumbnail;
    }

    public static function fromArray(array $array): InlineQueryResultVenue
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['venue']),
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'id'        => $this->id,
            'venue'     => $this->venue->typeSerialize(),
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getVenue(): Venue
    {
        return $this->venue;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }
}
