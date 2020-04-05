<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the chat members permissions. Supported only for basic groups and supergroups. Requires can_restrict_members administrator right.
 */
class SetChatPermissions extends TdFunction
{
    public const TYPE_NAME = 'setChatPermissions';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New non-administrator members permissions in the chat.
     *
     * @var ChatPermissions
     */
    protected ChatPermissions $permissions;

    public function __construct(int $chatId, ChatPermissions $permissions)
    {
        $this->chatId      = $chatId;
        $this->permissions = $permissions;
    }

    public static function fromArray(array $array): SetChatPermissions
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['permissions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'permissions' => $this->permissions->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPermissions(): ChatPermissions
    {
        return $this->permissions;
    }
}
