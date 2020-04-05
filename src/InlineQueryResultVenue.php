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
     *
     * @var string
     */
    protected string $id;

    /**
     * Venue result.
     *
     * @var Venue
     */
    protected Venue $venue;

    /**
     * Result thumbnail; may be null.
     *
     * @var PhotoSize|null
     */
    protected ?PhotoSize $thumbnail;

    public function __construct(string $id, Venue $venue, ?PhotoSize $thumbnail)
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

    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }
}
