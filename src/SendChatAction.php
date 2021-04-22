<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends a notification about user activity in a chat
 */
class SendChatAction extends TdFunction
{
    public const TYPE_NAME = 'sendChatAction';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * If not 0, a message thread identifier in which the action was performed
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * The action description
     *
     * @var ChatAction
     */
    protected ChatAction $action;

    public function __construct(int $chatId, int $messageThreadId, ChatAction $action)
    {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->action = $action;
    }

    public static function fromArray(array $array): SendChatAction
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['action']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'action' => $this->action->typeSerialize(),
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

    public function getAction(): ChatAction
    {
        return $this->action;
    }
}
