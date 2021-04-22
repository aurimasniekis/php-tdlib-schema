<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Creates a new supergroup or channel and sends a corresponding messageSupergroupChatCreate. Returns the newly created chat
 */
class CreateNewSupergroupChat extends TdFunction
{
    public const TYPE_NAME = 'createNewSupergroupChat';

    /**
     * Title of the new chat; 1-128 characters
     *
     * @var string
     */
    protected string $title;

    /**
     * True, if a channel chat should be created
     *
     * @var bool
     */
    protected bool $isChannel;

    /**
     * Chat description; 0-255 characters
     *
     * @var string
     */
    protected string $description;

    /**
     * Chat location if a location-based supergroup is being created
     *
     * @var ChatLocation
     */
    protected ChatLocation $location;

    public function __construct(string $title, bool $isChannel, string $description, ChatLocation $location)
    {
        $this->title = $title;
        $this->isChannel = $isChannel;
        $this->description = $description;
        $this->location = $location;
    }

    public static function fromArray(array $array): CreateNewSupergroupChat
    {
        return new static(
            $array['title'],
            $array['is_channel'],
            $array['description'],
            TdSchemaRegistry::fromArray($array['location']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'is_channel' => $this->isChannel,
            'description' => $this->description,
            'location' => $this->location->typeSerialize(),
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getLocation(): ChatLocation
    {
        return $this->location;
    }
}
