<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat permissions was changed.
 */
class ChatEventPermissionsChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventPermissionsChanged';

    /**
     * Previous chat permissions.
     *
     * @var ChatPermissions
     */
    protected ChatPermissions $oldPermissions;

    /**
     * New chat permissions.
     *
     * @var ChatPermissions
     */
    protected ChatPermissions $newPermissions;

    public function __construct(ChatPermissions $oldPermissions, ChatPermissions $newPermissions)
    {
        parent::__construct();

        $this->oldPermissions = $oldPermissions;
        $this->newPermissions = $newPermissions;
    }

    public static function fromArray(array $array): ChatEventPermissionsChanged
    {
        return new static(
            TdSchemaRegistry::fromArray($array['old_permissions']),
            TdSchemaRegistry::fromArray($array['new_permissions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'old_permissions' => $this->oldPermissions->typeSerialize(),
            'new_permissions' => $this->newPermissions->typeSerialize(),
        ];
    }

    public function getOldPermissions(): ChatPermissions
    {
        return $this->oldPermissions;
    }

    public function getNewPermissions(): ChatPermissions
    {
        return $this->newPermissions;
    }
}
