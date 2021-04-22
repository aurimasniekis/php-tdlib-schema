<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new incoming event; for bots only.
 */
class UpdateNewCustomEvent extends Update
{
    public const TYPE_NAME = 'updateNewCustomEvent';

    /**
     * A JSON-serialized event.
     */
    protected string $event;

    public function __construct(string $event)
    {
        parent::__construct();

        $this->event = $event;
    }

    public static function fromArray(array $array): UpdateNewCustomEvent
    {
        return new static(
            $array['event'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'event' => $this->event,
        ];
    }

    public function getEvent(): string
    {
        return $this->event;
    }
}
