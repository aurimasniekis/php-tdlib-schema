<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A rule to allow all of a user's contacts to do something.
 */
class UserPrivacySettingRuleAllowContacts extends UserPrivacySettingRule
{
    public const TYPE_NAME = 'userPrivacySettingRuleAllowContacts';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingRuleAllowContacts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
