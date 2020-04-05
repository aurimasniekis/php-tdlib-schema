<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of chat events.
 */
class ChatEvents extends TdObject
{
    public const TYPE_NAME = 'chatEvents';

    /**
     * List of events.
     *
     * @var ChatEvent[]
     */
    protected array $events;

    public function __construct(array $events)
    {
        $this->events = $events;
    }

    public static function fromArray(array $array): ChatEvents
    {
        return new static(
            array_map(fn ($x) => ChatEvent::fromArray($x), $array['events']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->events),
        ];
    }

    public function getEvents(): array
    {
        return $this->events;
    }
}
