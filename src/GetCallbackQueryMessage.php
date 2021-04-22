<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a message with the callback button that originated a callback query; for bots only.
 */
class GetCallbackQueryMessage extends TdFunction
{
    public const TYPE_NAME = 'getCallbackQueryMessage';

    /**
     * Identifier of the chat the message belongs to.
     */
    protected int $chatId;

    /**
     * Message identifier.
     */
    protected int $messageId;

    /**
     * Identifier of the callback query.
     */
    protected string $callbackQueryId;

    public function __construct(int $chatId, int $messageId, string $callbackQueryId)
    {
        $this->chatId          = $chatId;
        $this->messageId       = $messageId;
        $this->callbackQueryId = $callbackQueryId;
    }

    public static function fromArray(array $array): GetCallbackQueryMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['callback_query_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'message_id'        => $this->messageId,
            'callback_query_id' => $this->callbackQueryId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getCallbackQueryId(): string
    {
        return $this->callbackQueryId;
    }
}
