<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A privacy setting for managing whether the user can be invited to chats.
 */
class UserPrivacySettingAllowChatInvites extends UserPrivacySetting
{
    public const TYPE_NAME = 'userPrivacySettingAllowChatInvites';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingAllowChatInvites
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
