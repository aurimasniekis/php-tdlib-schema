<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message sender activity in the chat has changed
 */
class UpdateChatAction extends Update
{
    public const TYPE_NAME = 'updateChatAction';

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
     * Identifier of a message sender performing the action
     *
     * @var MessageSender
     */
    protected MessageSender $senderId;

    /**
     * The action
     *
     * @var ChatAction
     */
    protected ChatAction $action;

    public function __construct(int $chatId, int $messageThreadId, MessageSender $senderId, ChatAction $action)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->senderId = $senderId;
        $this->action = $action;
    }

    public static function fromArray(array $array): UpdateChatAction
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            TdSchemaRegistry::fromArray($array['action']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'sender_id' => $this->senderId->typeSerialize(),
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

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getAction(): ChatAction
    {
        return $this->action;
    }
}
