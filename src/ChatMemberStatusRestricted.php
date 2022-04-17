<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is under certain restrictions in the chat. Not supported in basic groups and channels
 */
class ChatMemberStatusRestricted extends ChatMemberStatus
{
    public const TYPE_NAME = 'chatMemberStatusRestricted';

    /**
     * True, if the user is a member of the chat
     *
     * @var bool
     */
    protected bool $isMember;

    /**
     * Point in time (Unix timestamp) when restrictions will be lifted from the user; 0 if never. If the user is restricted for more than 366 days or for less than 30 seconds from the current time, the user is considered to be restricted forever
     *
     * @var int
     */
    protected int $restrictedUntilDate;

    /**
     * User permissions in the chat
     *
     * @var ChatPermissions
     */
    protected ChatPermissions $permissions;

    public function __construct(bool $isMember, int $restrictedUntilDate, ChatPermissions $permissions)
    {
        parent::__construct();

        $this->isMember = $isMember;
        $this->restrictedUntilDate = $restrictedUntilDate;
        $this->permissions = $permissions;
    }

    public static function fromArray(array $array): ChatMemberStatusRestricted
    {
        return new static(
            $array['is_member'],
            $array['restricted_until_date'],
            TdSchemaRegistry::fromArray($array['permissions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_member' => $this->isMember,
            'restricted_until_date' => $this->restrictedUntilDate,
            'permissions' => $this->permissions->typeSerialize(),
        ];
    }

    public function getIsMember(): bool
    {
        return $this->isMember;
    }

    public function getRestrictedUntilDate(): int
    {
        return $this->restrictedUntilDate;
    }

    public function getPermissions(): ChatPermissions
    {
        return $this->permissions;
    }
}
