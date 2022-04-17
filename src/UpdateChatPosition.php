<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The position of a chat in a chat list has changed. Instead of this update updateChatLastMessage or updateChatDraftMessage might be sent
 */
class UpdateChatPosition extends Update
{
    public const TYPE_NAME = 'updateChatPosition';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New chat position. If new order is 0, then the chat needs to be removed from the list
     *
     * @var ChatPosition
     */
    protected ChatPosition $position;

    public function __construct(int $chatId, ChatPosition $position)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->position = $position;
    }

    public static function fromArray(array $array): UpdateChatPosition
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['position']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'position' => $this->position->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPosition(): ChatPosition
    {
        return $this->position;
    }
}
