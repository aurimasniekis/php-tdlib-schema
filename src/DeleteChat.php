<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes a chat along with all messages in the corresponding chat for all chat members; requires owner privileges. For group chats this will release the username and remove all members. Chats with more than 1000 members can't be deleted using this method
 */
class DeleteChat extends TdFunction
{
    public const TYPE_NAME = 'deleteChat';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    public function __construct(int $chatId)
    {
        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): DeleteChat
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
