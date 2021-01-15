<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a chat located nearby.
 */
class ChatNearby extends TdObject
{
    public const TYPE_NAME = 'chatNearby';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Distance to the chat location in meters.
     *
     * @var int
     */
    protected int $distance;

    public function __construct(int $chatId, int $distance)
    {
        $this->chatId   = $chatId;
        $this->distance = $distance;
    }

    public static function fromArray(array $array): ChatNearby
    {
        return new static(
            $array['chat_id'],
            $array['distance'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'distance' => $this->distance,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}
