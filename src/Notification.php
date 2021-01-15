<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a notification.
 */
class Notification extends TdObject
{
    public const TYPE_NAME = 'notification';

    /**
     * Unique persistent identifier of this notification.
     *
     * @var int
     */
    protected int $id;

    /**
     * Notification date.
     *
     * @var int
     */
    protected int $date;

    /**
     * True, if the notification was initially silent.
     *
     * @var bool
     */
    protected bool $isSilent;

    /**
     * Notification type.
     *
     * @var NotificationType
     */
    protected NotificationType $type;

    public function __construct(int $id, int $date, bool $isSilent, NotificationType $type)
    {
        $this->id       = $id;
        $this->date     = $date;
        $this->isSilent = $isSilent;
        $this->type     = $type;
    }

    public static function fromArray(array $array): Notification
    {
        return new static(
            $array['id'],
            $array['date'],
            $array['is_silent'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'id'        => $this->id,
            'date'      => $this->date,
            'is_silent' => $this->isSilent,
            'type'      => $this->type->typeSerialize(),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getIsSilent(): bool
    {
        return $this->isSilent;
    }

    public function getType(): NotificationType
    {
        return $this->type;
    }
}
