<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Removes a chat from the list of frequently used chats. Supported only if the chat info database is enabled.
 */
class RemoveTopChat extends TdFunction
{
    public const TYPE_NAME = 'removeTopChat';

    /**
     * Category of frequently used chats.
     *
     * @var TopChatCategory
     */
    protected TopChatCategory $category;

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    public function __construct(TopChatCategory $category, int $chatId)
    {
        $this->category = $category;
        $this->chatId   = $chatId;
    }

    public static function fromArray(array $array): RemoveTopChat
    {
        return new static(
            TdSchemaRegistry::fromArray($array['category']),
            $array['chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'category' => $this->category->typeSerialize(),
            'chat_id'  => $this->chatId,
        ];
    }

    public function getCategory(): TopChatCategory
    {
        return $this->category;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }
}
