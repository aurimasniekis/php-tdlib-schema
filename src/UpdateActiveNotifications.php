<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains active notifications that was shown on previous application launches. This update is sent only if the message database is used. In that case it comes once before any updateNotification and updateNotificationGroup update.
 */
class UpdateActiveNotifications extends Update
{
    public const TYPE_NAME = 'updateActiveNotifications';

    /**
     * Lists of active notification groups.
     *
     * @var NotificationGroup[]
     */
    protected array $groups;

    public function __construct(array $groups)
    {
        parent::__construct();

        $this->groups = $groups;
    }

    public static function fromArray(array $array): UpdateActiveNotifications
    {
        return new static(
            array_map(fn ($x) => NotificationGroup::fromArray($x), $array['groups']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->groups),
        ];
    }

    public function getGroups(): array
    {
        return $this->groups;
    }
}
