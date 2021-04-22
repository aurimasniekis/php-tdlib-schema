<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * User activity in the chat has changed.
 */
class UpdateUserChatAction extends Update
{
    public const TYPE_NAME = 'updateUserChatAction';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * If not 0, a message thread identifier in which the action was performed.
     */
    protected int $messageThreadId;

    /**
     * Identifier of a user performing an action.
     */
    protected int $userId;

    /**
     * The action description.
     */
    protected ChatAction $action;

    public function __construct(int $chatId, int $messageThreadId, int $userId, ChatAction $action)
    {
        parent::__construct();

        $this->chatId          = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->userId          = $userId;
        $this->action          = $action;
    }

    public static function fromArray(array $array): UpdateUserChatAction
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['action']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'user_id'           => $this->userId,
            'action'            => $this->action->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getAction(): ChatAction
    {
        return $this->action;
    }
}
