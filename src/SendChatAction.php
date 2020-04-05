<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends a notification about user activity in a chat.
 */
class SendChatAction extends TdFunction
{
    public const TYPE_NAME = 'sendChatAction';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The action description.
     *
     * @var ChatAction
     */
    protected ChatAction $action;

    public function __construct(int $chatId, ChatAction $action)
    {
        $this->chatId = $chatId;
        $this->action = $action;
    }

    public static function fromArray(array $array): SendChatAction
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['action']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'action'  => $this->action->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getAction(): ChatAction
    {
        return $this->action;
    }
}
