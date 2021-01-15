<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the location of a chat. Available only for some location-based supergroups, use supergroupFullInfo.can_set_location to check whether the method is allowed to use.
 */
class SetChatLocation extends TdFunction
{
    public const TYPE_NAME = 'setChatLocation';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * New location for the chat; must be valid and not null.
     */
    protected ChatLocation $location;

    public function __construct(int $chatId, ChatLocation $location)
    {
        $this->chatId   = $chatId;
        $this->location = $location;
    }

    public static function fromArray(array $array): SetChatLocation
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['location']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'location' => $this->location->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLocation(): ChatLocation
    {
        return $this->location;
    }
}
