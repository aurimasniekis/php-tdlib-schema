<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The supergroup location was changed
 */
class ChatEventLocationChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventLocationChanged';

    /**
     * Previous location; may be null
     *
     * @var ChatLocation|null
     */
    protected ?ChatLocation $oldLocation;

    /**
     * New location; may be null
     *
     * @var ChatLocation|null
     */
    protected ?ChatLocation $newLocation;

    public function __construct(?ChatLocation $oldLocation, ?ChatLocation $newLocation)
    {
        parent::__construct();

        $this->oldLocation = $oldLocation;
        $this->newLocation = $newLocation;
    }

    public static function fromArray(array $array): ChatEventLocationChanged
    {
        return new static(
            (isset($array['old_location']) ? TdSchemaRegistry::fromArray($array['old_location']) : null),
            (isset($array['new_location']) ? TdSchemaRegistry::fromArray($array['new_location']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_location' => (isset($this->oldLocation) ? $this->oldLocation : null),
            'new_location' => (isset($this->newLocation) ? $this->newLocation : null),
        ];
    }

    public function getOldLocation(): ?ChatLocation
    {
        return $this->oldLocation;
    }

    public function getNewLocation(): ?ChatLocation
    {
        return $this->newLocation;
    }
}
