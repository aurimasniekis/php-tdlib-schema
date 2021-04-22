<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new incoming callback query; for bots only.
 */
class UpdateNewCallbackQuery extends Update
{
    public const TYPE_NAME = 'updateNewCallbackQuery';

    /**
     * Unique query identifier.
     */
    protected string $id;

    /**
     * Identifier of the user who sent the query.
     */
    protected int $senderUserId;

    /**
     * Identifier of the chat where the query was sent.
     */
    protected int $chatId;

    /**
     * Identifier of the message, from which the query originated.
     */
    protected int $messageId;

    /**
     * Identifier that uniquely corresponds to the chat to which the message was sent.
     */
    protected string $chatInstance;

    /**
     * Query payload.
     */
    protected CallbackQueryPayload $payload;

    public function __construct(
        string $id,
        int $senderUserId,
        int $chatId,
        int $messageId,
        string $chatInstance,
        CallbackQueryPayload $payload
    ) {
        parent::__construct();

        $this->id           = $id;
        $this->senderUserId = $senderUserId;
        $this->chatId       = $chatId;
        $this->messageId    = $messageId;
        $this->chatInstance = $chatInstance;
        $this->payload      = $payload;
    }

    public static function fromArray(array $array): UpdateNewCallbackQuery
    {
        return new static(
            $array['id'],
            $array['sender_user_id'],
            $array['chat_id'],
            $array['message_id'],
            $array['chat_instance'],
            TdSchemaRegistry::fromArray($array['payload']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'id'             => $this->id,
            'sender_user_id' => $this->senderUserId,
            'chat_id'        => $this->chatId,
            'message_id'     => $this->messageId,
            'chat_instance'  => $this->chatInstance,
            'payload'        => $this->payload->typeSerialize(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getChatInstance(): string
    {
        return $this->chatInstance;
    }

    public function getPayload(): CallbackQueryPayload
    {
        return $this->payload;
    }
}
