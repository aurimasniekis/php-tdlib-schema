<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Removes an active notification from notification list. Needs to be called only if the notification is removed by the current user
 */
class RemoveNotification extends TdFunction
{
    public const TYPE_NAME = 'removeNotification';

    /**
     * Identifier of notification group to which the notification belongs
     *
     * @var int
     */
    protected int $notificationGroupId;

    /**
     * Identifier of removed notification
     *
     * @var int
     */
    protected int $notificationId;

    public function __construct(int $notificationGroupId, int $notificationId)
    {
        $this->notificationGroupId = $notificationGroupId;
        $this->notificationId = $notificationId;
    }

    public static function fromArray(array $array): RemoveNotification
    {
        return new static(
            $array['notification_group_id'],
            $array['notification_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'notification_group_id' => $this->notificationGroupId,
            'notification_id' => $this->notificationId,
        ];
    }

    public function getNotificationGroupId(): int
    {
        return $this->notificationGroupId;
    }

    public function getNotificationId(): int
    {
        return $this->notificationId;
    }
}
