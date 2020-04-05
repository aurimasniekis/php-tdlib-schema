<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Pins a message in a chat; requires can_pin_messages rights.
 */
class PinChatMessage extends TdFunction
{
    public const TYPE_NAME = 'pinChatMessage';

    /**
     * Identifier of the chat.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the new pinned message.
     *
     * @var int
     */
    protected int $messageId;

    /**
     * True, if there should be no notification about the pinned message.
     *
     * @var bool
     */
    protected bool $disableNotification;

    public function __construct(int $chatId, int $messageId, bool $disableNotification)
    {
        $this->chatId              = $chatId;
        $this->messageId           = $messageId;
        $this->disableNotification = $disableNotification;
    }

    public static function fromArray(array $array): PinChatMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['disable_notification'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'message_id'           => $this->messageId,
            'disable_notification' => $this->disableNotification,
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

    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }
}
