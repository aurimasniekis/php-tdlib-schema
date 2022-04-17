<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message was sent on behalf of a chat
 */
class MessageSenderChat extends MessageSender
{
    public const TYPE_NAME = 'messageSenderChat';

    /**
     * Identifier of the chat that sent the message
     *
     * @var int
     */
    protected int $chatId;

    public function __construct(int $chatId)
    {
        parent::__construct();

        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): MessageSenderChat
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
