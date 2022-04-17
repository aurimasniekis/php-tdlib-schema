<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with a live location was viewed. When the update is received, the application is supposed to update the live location
 */
class UpdateMessageLiveLocationViewed extends Update
{
    public const TYPE_NAME = 'updateMessageLiveLocationViewed';

    /**
     * Identifier of the chat with the live location message
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message with live location
     *
     * @var int
     */
    protected int $messageId;

    public function __construct(int $chatId, int $messageId)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): UpdateMessageLiveLocationViewed
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
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
}
