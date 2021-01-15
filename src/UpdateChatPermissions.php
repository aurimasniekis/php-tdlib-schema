<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Chat permissions was changed.
 */
class UpdateChatPermissions extends Update
{
    public const TYPE_NAME = 'updateChatPermissions';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The new chat permissions.
     *
     * @var ChatPermissions
     */
    protected ChatPermissions $permissions;

    public function __construct(int $chatId, ChatPermissions $permissions)
    {
        parent::__construct();

        $this->chatId      = $chatId;
        $this->permissions = $permissions;
    }

    public static function fromArray(array $array): UpdateChatPermissions
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
