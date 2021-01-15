<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with a location.
 */
class MessageLocation extends MessageContent
{
    public const TYPE_NAME = 'messageLocation';

    /**
     * The location description.
     *
     * @var Location
     */
    protected Location $location;

    /**
     * Time relative to the message sent date until which the location can be updated, in seconds.
     *
     * @var int
     */
    protected int $livePeriod;

    /**
     * Left time for which the location can be updated, in seconds. updateMessageContent is not sent when this field changes.
     *
     * @var int
     */
    protected int $expiresIn;

    public function __construct(Location $location, int $livePeriod, int $expiresIn)
    {
        parent::__construct();

        $this->location   = $location;
        $this->livePeriod = $livePeriod;
        $this->expiresIn  = $expiresIn;
    }

    public static function fromArray(array $array): MessageLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            $array['live_period'],
            $array['expires_in'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'location'    => $this->location->typeSerialize(),
            'live_period' => $this->livePeriod,
            'expires_in'  => $this->expiresIn,
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

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }
}
