<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the notification settings of a chat. Notification settings of a chat with the current user (Saved Messages) can't be changed
 */
class SetChatNotificationSettings extends TdFunction
{
    public const TYPE_NAME = 'setChatNotificationSettings';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New notification settings for the chat. If the chat is muted for more than 1 week, it is considered to be muted forever
     *
     * @var ChatNotificationSettings
     */
    protected ChatNotificationSettings $notificationSettings;

    public function __construct(int $chatId, ChatNotificationSettings $notificationSettings)
    {
        $this->chatId = $chatId;
        $this->notificationSettings = $notificationSettings;
    }

    public static function fromArray(array $array): SetChatNotificationSettings
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['notification_settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'notification_settings' => $this->notificationSettings->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getNotificationSettings(): ChatNotificationSettings
    {
        return $this->notificationSettings;
    }
}
