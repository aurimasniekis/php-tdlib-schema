<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with a location.
 */
class InputMessageLocation extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageLocation';

    /**
     * Location to be sent.
     *
     * @var Location
     */
    protected Location $location;

    /**
     * Period for which the location can be updated, in seconds; should be between 60 and 86400 for a live location and 0 otherwise.
     *
     * @var int
     */
    protected int $livePeriod;

    public function __construct(Location $location, int $livePeriod)
    {
        parent::__construct();

        $this->location   = $location;
        $this->livePeriod = $livePeriod;
    }

    public static function fromArray(array $array): InputMessageLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            $array['live_period'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'location'    => $this->location->typeSerialize(),
            'live_period' => $this->livePeriod,
        ];
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getLivePeriod(): int
    {
        return $this->livePeriod;
    }
}
