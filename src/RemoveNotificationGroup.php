<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Removes a group of active notifications. Needs to be called only if the notification group is removed by the current user.
 */
class RemoveNotificationGroup extends TdFunction
{
    public const TYPE_NAME = 'removeNotificationGroup';

    /**
     * Notification group identifier.
     *
     * @var int
     */
    protected int $notificationGroupId;

    /**
     * The maximum identifier of removed notifications.
     *
     * @var int
     */
    protected int $maxNotificationId;

    public function __construct(int $notificationGroupId, int $maxNotificationId)
    {
        $this->notificationGroupId = $notificationGroupId;
        $this->maxNotificationId   = $maxNotificationId;
    }

    public static function fromArray(array $array): RemoveNotificationGroup
    {
        return new static(
            $array['notification_group_id'],
            $array['max_notification_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'notification_group_id' => $this->notificationGroupId,
            'max_notification_id'   => $this->maxNotificationId,
        ];
    }

    public function getNotificationGroupId(): int
    {
        return $this->notificationGroupId;
    }

    public function getMaxNotificationId(): int
    {
        return $this->maxNotificationId;
    }
}
