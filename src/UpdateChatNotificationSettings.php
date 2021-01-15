<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Notification settings for a chat were changed.
 */
class UpdateChatNotificationSettings extends Update
{
    public const TYPE_NAME = 'updateChatNotificationSettings';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The new notification settings.
     *
     * @var ChatNotificationSettings
     */
    protected ChatNotificationSettings $notificationSettings;

    public function __construct(int $chatId, ChatNotificationSettings $notificationSettings)
    {
        parent::__construct();

        $this->chatId               = $chatId;
        $this->notificationSettings = $notificationSettings;
    }

    public static function fromArray(array $array): UpdateChatNotificationSettings
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['notification_settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
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
