<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Removes all pinned messages from a chat; requires can_pin_messages rights in the group or can_edit_messages rights in the channel.
 */
class UnpinAllChatMessages extends TdFunction
{
    public const TYPE_NAME = 'unpinAllChatMessages';

    /**
     * Identifier of the chat.
     */
    protected int $chatId;

    public function __construct(int $chatId)
    {
        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): UnpinAllChatMessages
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }
}
