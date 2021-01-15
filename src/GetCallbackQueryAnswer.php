<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends a callback query to a bot and returns an answer. Returns an error with code 502 if the bot fails to answer the query before the query timeout expires.
 */
class GetCallbackQueryAnswer extends TdFunction
{
    public const TYPE_NAME = 'getCallbackQueryAnswer';

    /**
     * Identifier of the chat with the message.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message from which the query originated.
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Query payload.
     *
     * @var CallbackQueryPayload
     */
    protected CallbackQueryPayload $payload;

    public function __construct(int $chatId, int $messageId, CallbackQueryPayload $payload)
    {
        $this->chatId    = $chatId;
        $this->messageId = $messageId;
        $this->payload   = $payload;
    }

    public static function fromArray(array $array): GetCallbackQueryAnswer
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['payload']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'payload'    => $this->payload->typeSerialize(),
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

    public function getPayload(): CallbackQueryPayload
    {
        return $this->payload;
    }
}
