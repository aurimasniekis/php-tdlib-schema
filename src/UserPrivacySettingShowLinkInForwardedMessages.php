<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A privacy setting for managing whether a link to the user's account is included in forwarded messages
 */
class UserPrivacySettingShowLinkInForwardedMessages extends UserPrivacySetting
{
    public const TYPE_NAME = 'userPrivacySettingShowLinkInForwardedMessages';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingShowLinkInForwardedMessages
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
