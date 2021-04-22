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
     */
    protected Location $location;

    /**
     * Time relative to the message send date, for which the location can be updated, in seconds.
     */
    protected int $livePeriod;

    /**
     * Left time for which the location can be updated, in seconds. updateMessageContent is not sent when this field changes.
     */
    protected int $expiresIn;

    /**
     * For live locations, a direction in which the location moves, in degrees; 1-360. If 0 the direction is unknown.
     */
    protected int $heading;

    /**
     * For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000). 0 if the notification is disabled. Available only for the message sender.
     */
    protected int $proximityAlertRadius;

    public function __construct(
        Location $location,
        int $livePeriod,
        int $expiresIn,
        int $heading,
        int $proximityAlertRadius
    ) {
        parent::__construct();

        $this->location             = $location;
        $this->livePeriod           = $livePeriod;
        $this->expiresIn            = $expiresIn;
        $this->heading              = $heading;
        $this->proximityAlertRadius = $proximityAlertRadius;
    }

    public static function fromArray(array $array): MessageLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            $array['live_period'],
            $array['expires_in'],
            $array['heading'],
            $array['proximity_alert_radius'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'location'               => $this->location->typeSerialize(),
            'live_period'            => $this->livePeriod,
            'expires_in'             => $this->expiresIn,
            'heading'                => $this->heading,
            'proximity_alert_radius' => $this->proximityAlertRadius,
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

    public function getHeading(): int
    {
        return $this->heading;
    }

    public function getProximityAlertRadius(): int
    {
        return $this->proximityAlertRadius;
    }
}
