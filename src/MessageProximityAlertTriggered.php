<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A user in the chat came within proximity alert range
 */
class MessageProximityAlertTriggered extends MessageContent
{
    public const TYPE_NAME = 'messageProximityAlertTriggered';

    /**
     * The identifier of a user or chat that triggered the proximity alert
     *
     * @var MessageSender
     */
    protected MessageSender $travelerId;

    /**
     * The identifier of a user or chat that subscribed for the proximity alert
     *
     * @var MessageSender
     */
    protected MessageSender $watcherId;

    /**
     * The distance between the users
     *
     * @var int
     */
    protected int $distance;

    public function __construct(MessageSender $travelerId, MessageSender $watcherId, int $distance)
    {
        parent::__construct();

        $this->travelerId = $travelerId;
        $this->watcherId = $watcherId;
        $this->distance = $distance;
    }

    public static function fromArray(array $array): MessageProximityAlertTriggered
    {
        return new static(
            TdSchemaRegistry::fromArray($array['traveler_id']),
            TdSchemaRegistry::fromArray($array['watcher_id']),
            $array['distance'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'traveler_id' => $this->travelerId->typeSerialize(),
            'watcher_id' => $this->watcherId->typeSerialize(),
            'distance' => $this->distance,
        ];
    }

    public function getTravelerId(): MessageSender
    {
        return $this->travelerId;
    }

    public function getWatcherId(): MessageSender
    {
        return $this->watcherId;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}
