<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A privacy setting for managing whether the user's profile photo is visible
 */
class UserPrivacySettingShowProfilePhoto extends UserPrivacySetting
{
    public const TYPE_NAME = 'userPrivacySettingShowProfilePhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingShowProfilePhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
