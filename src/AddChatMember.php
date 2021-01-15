<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Adds a new member to a chat. Members can't be added to private or secret chats. Members will not be added until the chat state has been synchronized with the server.
 */
class AddChatMember extends TdFunction
{
    public const TYPE_NAME = 'addChatMember';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the user.
     *
     * @var int
     */
    protected int $userId;

    /**
     * The number of earlier messages from the chat to be forwarded to the new member; up to 100. Ignored for supergroups and channels.
     *
     * @var int
     */
    protected int $forwardLimit;

    public function __construct(int $chatId, int $userId, int $forwardLimit)
    {
        $this->chatId       = $chatId;
        $this->userId       = $userId;
        $this->forwardLimit = $forwardLimit;
    }

    public static function fromArray(array $array): AddChatMember
    {
        return new static(
            $array['chat_id'],
            $array['user_id'],
            $array['forward_limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'user_id'       => $this->userId,
            'forward_limit' => $this->forwardLimit,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getForwardLimit(): int
    {
        return $this->forwardLimit;
    }
}
