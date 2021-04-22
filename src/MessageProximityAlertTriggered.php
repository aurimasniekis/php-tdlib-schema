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
     * The user or chat, which triggered the proximity alert
     *
     * @var MessageSender
     */
    protected MessageSender $traveler;

    /**
     * The user or chat, which subscribed for the proximity alert
     *
     * @var MessageSender
     */
    protected MessageSender $watcher;

    /**
     * The distance between the users
     *
     * @var int
     */
    protected int $distance;

    public function __construct(MessageSender $traveler, MessageSender $watcher, int $distance)
    {
        parent::__construct();

        $this->traveler = $traveler;
        $this->watcher = $watcher;
        $this->distance = $distance;
    }

    public static function fromArray(array $array): MessageProximityAlertTriggered
    {
        return new static(
            TdSchemaRegistry::fromArray($array['traveler']),
            TdSchemaRegistry::fromArray($array['watcher']),
            $array['distance'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'traveler' => $this->traveler->typeSerialize(),
            'watcher' => $this->watcher->typeSerialize(),
            'distance' => $this->distance,
        ];
    }

    public function getTraveler(): MessageSender
    {
        return $this->traveler;
    }

    public function getWatcher(): MessageSender
    {
        return $this->watcher;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}
