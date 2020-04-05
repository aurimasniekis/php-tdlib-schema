<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat pinned message was changed.
 */
class UpdateChatPinnedMessage extends Update
{
    public const TYPE_NAME = 'updateChatPinnedMessage';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The new identifier of the pinned message; 0 if there is no pinned message in the chat.
     *
     * @var int
     */
    protected int $pinnedMessageId;

    public function __construct(int $chatId, int $pinnedMessageId)
    {
        parent::__construct();

        $this->chatId          = $chatId;
        $this->pinnedMessageId = $pinnedMessageId;
    }

    public static function fromArray(array $array): UpdateChatPinnedMessage
    {
        return new static(
            $array['chat_id'],
            $array['pinned_message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'pinned_message_id' => $this->pinnedMessageId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPinnedMessageId(): int
    {
        return $this->pinnedMessageId;
    }
}
