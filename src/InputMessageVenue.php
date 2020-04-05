<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with information about a venue.
 */
class InputMessageVenue extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageVenue';

    /**
     * Venue to send.
     *
     * @var Venue
     */
    protected Venue $venue;

    public function __construct(Venue $venue)
    {
        parent::__construct();

        $this->venue = $venue;
    }

    public static function fromArray(array $array): InputMessageVenue
    {
        return new static(
            TdSchemaRegistry::fromArray($array['venue']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'venue' => $this->venue->typeSerialize(),
        ];
    }

    public function getVenue(): Venue
    {
        return $this->venue;
    }
}
