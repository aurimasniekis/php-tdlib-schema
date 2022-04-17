<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Adds a chat to the list of recently found chats. The chat is added to the beginning of the list. If the chat is already in the list, it will be removed from the list first
 */
class AddRecentlyFoundChat extends TdFunction
{
    public const TYPE_NAME = 'addRecentlyFoundChat';

    /**
     * Identifier of the chat to add
     *
     * @var int
     */
    protected int $chatId;

    public function __construct(int $chatId)
    {
        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): AddRecentlyFoundChat
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }
}
