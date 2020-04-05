<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new incoming callback query from a message sent via a bot; for bots only.
 */
class UpdateNewInlineCallbackQuery extends Update
{
    public const TYPE_NAME = 'updateNewInlineCallbackQuery';

    /**
     * Unique query identifier.
     *
     * @var int
     */
    protected int $id;

    /**
     * Identifier of the user who sent the query.
     *
     * @var int
     */
    protected int $senderUserId;

    /**
     * Identifier of the inline message, from which the query originated.
     *
     * @var string
     */
    protected string $inlineMessageId;

    /**
     * An identifier uniquely corresponding to the chat a message was sent to.
     *
     * @var int
     */
    protected int $chatInstance;

    /**
     * Query payload.
     *
     * @var CallbackQueryPayload
     */
    protected CallbackQueryPayload $payload;

    public function __construct(int $id, int $senderUserId, string $inlineMessageId, int $chatInstance, CallbackQueryPayload $payload)
    {
        parent::__construct();

        $this->id              = $id;
        $this->senderUserId    = $senderUserId;
        $this->inlineMessageId = $inlineMessageId;
        $this->chatInstance    = $chatInstance;
        $this->payload         = $payload;
    }

    public static function fromArray(array $array): UpdateNewInlineCallbackQuery
    {
        return new static(
            $array['id'],
            $array['sender_user_id'],
            $array['inline_message_id'],
            $array['chat_instance'],
            TdSchemaRegistry::fromArray($array['payload']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'id'                => $this->id,
            'sender_user_id'    => $this->senderUserId,
            'inline_message_id' => $this->inlineMessageId,
            'chat_instance'     => $this->chatInstance,
            'payload'           => $this->payload->typeSerialize(),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getChatInstance(): int
    {
        return $this->chatInstance;
    }

    public function getPayload(): CallbackQueryPayload
    {
        return $this->payload;
    }
}
