<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Pins a message in a chat; requires can_pin_messages rights or can_edit_messages rights in the channel
 */
class PinChatMessage extends TdFunction
{
    public const TYPE_NAME = 'pinChatMessage';

    /**
     * Identifier of the chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the new pinned message
     *
     * @var int
     */
    protected int $messageId;

    /**
     * True, if there must be no notification about the pinned message. Notifications are always disabled in channels and private chats
     *
     * @var bool
     */
    protected bool $disableNotification;

    /**
     * True, if the message needs to be pinned for one side only; private chats only
     *
     * @var bool
     */
    protected bool $onlyForSelf;

    public function __construct(int $chatId, int $messageId, bool $disableNotification, bool $onlyForSelf)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->disableNotification = $disableNotification;
        $this->onlyForSelf = $onlyForSelf;
    }

    public static function fromArray(array $array): PinChatMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['disable_notification'],
            $array['only_for_self'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'disable_notification' => $this->disableNotification,
            'only_for_self' => $this->onlyForSelf,
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

    public function getOnlyForSelf(): bool
    {
        return $this->onlyForSelf;
    }
}
