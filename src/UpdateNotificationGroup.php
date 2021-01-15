<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A list of active notifications in a notification group has changed.
 */
class UpdateNotificationGroup extends Update
{
    public const TYPE_NAME = 'updateNotificationGroup';

    /**
     * Unique notification group identifier.
     */
    protected int $notificationGroupId;

    /**
     * New type of the notification group.
     */
    protected NotificationGroupType $type;

    /**
     * Identifier of a chat to which all notifications in the group belong.
     */
    protected int $chatId;

    /**
     * Chat identifier, which notification settings must be applied to the added notifications.
     */
    protected int $notificationSettingsChatId;

    /**
     * True, if the notifications should be shown without sound.
     */
    protected bool $isSilent;

    /**
     * Total number of unread notifications in the group, can be bigger than number of active notifications.
     */
    protected int $totalCount;

    /**
     * List of added group notifications, sorted by notification ID.
     *
     * @var Notification[]
     */
    protected array $addedNotifications;

    /**
     * Identifiers of removed group notifications, sorted by notification ID.
     *
     * @var int[]
     */
    protected array $removedNotificationIds;

    public function __construct(
        int $notificationGroupId,
        NotificationGroupType $type,
        int $chatId,
        int $notificationSettingsChatId,
        bool $isSilent,
        int $totalCount,
        array $addedNotifications,
        array $removedNotificationIds
    ) {
        parent::__construct();

        $this->notificationGroupId        = $notificationGroupId;
        $this->type                       = $type;
        $this->chatId                     = $chatId;
        $this->notificationSettingsChatId = $notificationSettingsChatId;
        $this->isSilent                   = $isSilent;
        $this->totalCount                 = $totalCount;
        $this->addedNotifications         = $addedNotifications;
        $this->removedNotificationIds     = $removedNotificationIds;
    }

    public static function fromArray(array $array): UpdateNotificationGroup
    {
        return new static(
            $array['notification_group_id'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['chat_id'],
            $array['notification_settings_chat_id'],
            $array['is_silent'],
            $array['total_count'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['added_notifications']),
            $array['removed_notification_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'notification_group_id'         => $this->notificationGroupId,
            'type'                          => $this->type->typeSerialize(),
            'chat_id'                       => $this->chatId,
            'notification_settings_chat_id' => $this->notificationSettingsChatId,
            'is_silent'                     => $this->isSilent,
            'total_count'                   => $this->totalCount,
            array_map(fn ($x)               => $x->typeSerialize(), $this->addedNotifications),
            'removed_notification_ids'      => $this->removedNotificationIds,
        ];
    }

    public function getNotificationGroupId(): int
    {
        return $this->notificationGroupId;
    }

    public function getType(): NotificationGroupType
    {
        return $this->type;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getNotificationSettingsChatId(): int
    {
        return $this->notificationSettingsChatId;
    }

    public function getIsSilent(): bool
    {
        return $this->isSilent;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getAddedNotifications(): array
    {
        return $this->addedNotifications;
    }

    public function getRemovedNotificationIds(): array
    {
        return $this->removedNotificationIds;
    }
}
